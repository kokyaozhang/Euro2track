<?php //1834424e67f64b13b1b4a7e8565c3c8c
/** @noinspection all */

namespace LaravelIdea\Helper\Laravel\Jetstream {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Jetstream\TeamInvitation;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method TeamInvitation|null getOrPut($key, $value)
     * @method TeamInvitation|$this shift(int $count = 1)
     * @method TeamInvitation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TeamInvitation|$this pop(int $count = 1)
     * @method TeamInvitation|null pull($key, \Closure $default = null)
     * @method TeamInvitation|null last(callable $callback = null, \Closure $default = null)
     * @method TeamInvitation|$this random(callable|int|null $number = null)
     * @method TeamInvitation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TeamInvitation|null get($key, \Closure $default = null)
     * @method TeamInvitation|null first(callable $callback = null, \Closure $default = null)
     * @method TeamInvitation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TeamInvitation|null find($key, $default = null)
     * @method TeamInvitation[] all()
     */
    class _IH_TeamInvitation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TeamInvitation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_TeamInvitation_QB whereId($value)
     * @method _IH_TeamInvitation_QB whereTeamId($value)
     * @method _IH_TeamInvitation_QB whereEmail($value)
     * @method _IH_TeamInvitation_QB whereRole($value)
     * @method _IH_TeamInvitation_QB whereCreatedAt($value)
     * @method _IH_TeamInvitation_QB whereUpdatedAt($value)
     * @method TeamInvitation baseSole(array|string $columns = ['*'])
     * @method TeamInvitation create(array $attributes = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] cursor()
     * @method TeamInvitation|null|_IH_TeamInvitation_C|TeamInvitation[] find($id, array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrFail($id, array|string $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrNew($id, array|string $columns = ['*'])
     * @method TeamInvitation first(array|string $columns = ['*'])
     * @method TeamInvitation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TeamInvitation firstOrCreate(array $attributes = [], array $values = [])
     * @method TeamInvitation firstOrFail(array|string $columns = ['*'])
     * @method TeamInvitation firstOrNew(array $attributes = [], array $values = [])
     * @method TeamInvitation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TeamInvitation forceCreate(array $attributes)
     * @method _IH_TeamInvitation_C|TeamInvitation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] get(array|string $columns = ['*'])
     * @method TeamInvitation getModel()
     * @method TeamInvitation[] getModels(array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] hydrate(array $items)
     * @method TeamInvitation make(array $attributes = [])
     * @method TeamInvitation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TeamInvitation[]|_IH_TeamInvitation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TeamInvitation[]|_IH_TeamInvitation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TeamInvitation sole(array|string $columns = ['*'])
     * @method TeamInvitation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TeamInvitation_QB extends _BaseBuilder {}
}
