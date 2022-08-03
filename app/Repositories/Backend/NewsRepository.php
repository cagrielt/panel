<?php

namespace App\Repositories\Backend;

use App\Events\Backend\News\NewsCreated;
use App\Events\Backend\News\NewsDeleted;
use App\Events\Backend\News\NewsUpdated;
use App\Exceptions\GeneralException;
use App\Models\News;
use App\Repositories\BaseRepository;

class NewsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = News::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'intived_number',
        'invited_talks',
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
                'intived_number',
                'invited_talks',
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

        if ($News = News::create($input)) {
            event(new NewsCreated($News));

            return $News;
        }

        throw new GeneralException(__('exceptions.backend.news.create_error'));
    }

    /**
     * @param \App\Models\News $News
     * @param array $input
     */
    public function update(News $news, array $input)
    {
        $input['updated_by'] = auth()->user()->id;
        $input['status'] = $input['status'] ?? 0;

        if ($news->update($input)) {
            event(new NewsUpdated($news));

            return $news->fresh();
        }

        throw new GeneralException(__('exceptions.backend.news.update_error'));
    }

    /**
     * @param \App\Models\News $News
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(News $news)
    {
        if ($news->delete()) {
            event(new NewsDeleted($news));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.news.delete_error'));
    }
}
