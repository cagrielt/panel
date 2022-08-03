<?php
namespace App\Http\Controllers\Backend\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\News\ManageNewsRequest;
use App\Repositories\Backend\NewsRepository;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class NewsTableController extends Controller
{
    
    /**
     * @var \App\Repositories\Backend\NewsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\NewsRepository $faqs
     */
    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Faqs\ManageNewsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageNewsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['intived_number'])
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('news.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->editColumn('status', function ($news) {
                return $news->status_label;
            })
            ->editColumn('created_at', function ($news) {
                return Carbon::parse($news->created_at)->toDateString();
            })
            ->addColumn('actions', function ($news) {
                return $news->action_buttons;
            })
            ->make(true);
    }
}
