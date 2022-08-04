<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Publications\PublicationsCreated;
use App\Events\Backend\Publications\PublicationsDeleted;
use App\Events\Backend\Publications\PublicationsUpdated;
use App\Exceptions\GeneralException;
use App\Models\Publications;
use App\Repositories\BaseRepository;

class PublicationsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Publications::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'year',
        'link',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Retrieve List.
     *
     * @var array
     * @return Collection
     */
    public function retrieveList(array $options = [])
    {
        $perPage = isset($options['per_page']) ? (int) $options['per_page'] : 20;
        $orderBy = isset($options['order_by']) && in_array($options['order_by'], $this->sortable) ? $options['order_by'] : 'created_at';
        $order = isset($options['order']) && in_array($options['order'], ['asc', 'desc']) ? $options['order'] : 'desc';
        $query = $this->query()
            ->orderBy($orderBy, $order);

        if ($perPage == -1) {
            return $query->get();
        }

        return $query->paginate($perPage);
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                'id',
                'year',
                'link',
                'description',
                'created_at',
                'status',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        $input['created_by'] = auth()->user()->id;
        $input['status'] = $input['status'] ?? 0;

        if ($Publications = Publications::create($input)) {
            event(new PublicationsCreated($publications));

            return $publications;
        }

        throw new GeneralException(__('exceptions.backend.publications.create_error'));
    }

    /**
     * @param \App\Models\News $News
     * @param array $input
     */
    public function update(Publications $publications, array $input)
    {
        $input['updated_by'] = auth()->user()->id;
        $input['status'] = $input['status'] ?? 0;

        if ($publications->update($input)) {
            event(new PublicationsUpdated($publications));

            return $publications->fresh();
        }

        throw new GeneralException(__('exceptions.backend.publications.update_error'));
    }

    /**
     * @param \App\Models\News $News
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Publications $publications)
    {
        if ($publications->delete()) {
            event(new PublicationsDeleted($publications));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.publications.delete_error'));
    }
}
