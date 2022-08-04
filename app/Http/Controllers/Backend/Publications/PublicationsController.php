<?php

namespace App\Http\Controllers\Backend\Publications;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\publications\CreatePublicationsRequest;
use App\Http\Requests\Backend\publications\DeletePublicationsRequest;
use App\Http\Requests\Backend\publications\ManagePublicationsRequest;
use App\Http\Requests\Backend\publications\StorePublicationsRequest;
use App\Http\Requests\Backend\publications\UpdatePublicationsRequest;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\publications;
use App\Repositories\Backend\PublicationsRepository;
use Illuminate\Support\Facades\View;


class PublicationsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\publicationsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\publicationsRepository $faq
     */
    public function __construct(publicationsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['publications']);
    }

    /**
     * @param \App\Http\Requests\Backend\publications\ManagepublicationsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManagePublicationsRequest $request)
    {
        return new ViewResponse('backend.publications.index');
    }

    /**
     * @param \App\Http\Requests\Backend\publications\CreatepublicationsRequest $request
     *
     * @return ViewResponse
     */
    public function create(CreatePublicationsRequest $request)
    {
        return new ViewResponse('backend.publications.create');
    }

    /**
     * @param \App\Http\Requests\Backend\publications\StorepublicationsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StorePublicationsRequest $request)
    {
        $this->repository->create($request->except('_token'));

        return new RedirectResponse(route('admin.publications.index'), ['flash_success' => __('alerts.backend.publications.created')]);
    }

    /**
     * @param \App\Models\publications $publications
     * @param \App\Http\Requests\Backend\publications\ManagePageRequest $request
     *
     * @return ViewResponse
     */
    public function edit(Publications $new, ManagePublicationsRequest $request)
    {
        return new ViewResponse('backend.publications.edit', ['publications' => $publications]);
    }

    /**
     * @param \App\Models\New $publications
     * @param \App\Http\Requests\Backend\publications\UpdatepublicationsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Publications $publications, UpdatePublicationsRequest $request)
    {
        $this->repository->update($publications, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.publications.index'), ['flash_success' => __('alerts.backend.publications.updated')]);
    }

    /**
     * @param \App\Models\publications $faq
     * @param \App\Http\Requests\Backend\Pages\DeletepublicationsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Publications $publications, DeletepublicationsRequest $request)
    {
        $this->repository->delete($publications);

        return new RedirectResponse(route('admin.publications.index'), ['flash_success' => __('alerts.backend.publications.deleted')]);
    }
}

