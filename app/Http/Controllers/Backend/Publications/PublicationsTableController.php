<?php
namespace App\Http\Controllers\Backend\Publications;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Publications\ManagePublicationsRequest;
use App\Repositories\Backend\PublicationsRepository;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class PublicationsTableController extends Controller
{
    
    /**
     * @var \App\Repositories\Backend\PublicationsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\PublicationsRepository $faqs
     */
    public function __construct(PublicationsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Faqs\ManagePublicationsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManagePublicationsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['year'])
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('publications.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->editColumn('status', function ($publications) {
                return $publications->status_label;
            })
            ->editColumn('created_at', function ($publications) {
                return Carbon::parse($publications->created_at)->toDateString();
            })
            ->addColumn('actions', function ($publications) {
                return $publications->action_buttons;
            })
            ->make(true);
    }
}
