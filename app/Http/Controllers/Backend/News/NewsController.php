<?php

namespace App\Http\Controllers\Backend\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\News\CreateNewsRequest;
use App\Http\Requests\Backend\News\DeleteNewsRequest;
use App\Http\Requests\Backend\News\ManageNewsRequest;
use App\Http\Requests\Backend\News\StoreNewsRequest;
use App\Http\Requests\Backend\News\UpdateNewsRequest;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\News;
use App\Repositories\Backend\NewsRepository;
use Illuminate\Support\Facades\View;


class NewsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\NewsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\NewsRepository $faq
     */
    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['News']);
    }

    /**
     * @param \App\Http\Requests\Backend\News\ManageNewsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageNewsRequest $request)
    {
        return new ViewResponse('backend.news.index');
    }

    /**
     * @param \App\Http\Requests\Backend\News\CreateNewsRequest $request
     *
     * @return ViewResponse
     */
    public function create(CreateNewsRequest $request)
    {
        return new ViewResponse('backend.news.create');
    }

    /**
     * @param \App\Http\Requests\Backend\News\StoreNewsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreNewsRequest $request)
    {
        $this->repository->create($request->except('_token'));

        return new RedirectResponse(route('admin.news.index'), ['flash_success' => __('alerts.backend.news.created')]);
    }

    /**
     * @param \App\Models\News $news
     * @param \App\Http\Requests\Backend\News\ManagePageRequest $request
     *
     * @return ViewResponse
     */
    public function edit(News $new, ManageNewsRequest $request)
    {
        return new ViewResponse('backend.news.edit', ['news' => $news]);
    }

    /**
     * @param \App\Models\New $news
     * @param \App\Http\Requests\Backend\News\UpdateNewsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(News $news, UpdateNewsRequest $request)
    {
        $this->repository->update($news, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.news.index'), ['flash_success' => __('alerts.backend.news.updated')]);
    }

    /**
     * @param \App\Models\News $faq
     * @param \App\Http\Requests\Backend\Pages\DeleteNewsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(News $news, DeleteNewsRequest $request)
    {
        $this->repository->delete($news);

        return new RedirectResponse(route('admin.news.index'), ['flash_success' => __('alerts.backend.news.deleted')]);
    }
}

