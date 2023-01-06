<?php //de33c49fccc965e6f0b85689c7308eb9
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Breakdown;
    use App\Models\Fieldequip;
    use App\Models\Membership;
    use App\Models\Post;
    use App\Models\Report;
    use App\Models\Student;
    use App\Models\Team;
    use App\Models\TeamInvitation;
    use App\Models\Teamuser;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Breakdown|null getOrPut($key, $value)
     * @method Breakdown|$this shift(int $count = 1)
     * @method Breakdown|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Breakdown|$this pop(int $count = 1)
     * @method Breakdown|null pull($key, \Closure $default = null)
     * @method Breakdown|null last(callable $callback = null, \Closure $default = null)
     * @method Breakdown|$this random(callable|int|null $number = null)
     * @method Breakdown|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Breakdown|null get($key, \Closure $default = null)
     * @method Breakdown|null first(callable $callback = null, \Closure $default = null)
     * @method Breakdown|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Breakdown|null find($key, $default = null)
     * @method Breakdown[] all()
     */
    class _IH_Breakdown_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Breakdown[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Breakdown_QB whereId($value)
     * @method _IH_Breakdown_QB whereIdentificationNo($value)
     * @method _IH_Breakdown_QB whereReferenceNo($value)
     * @method _IH_Breakdown_QB whereBreakdownDate($value)
     * @method _IH_Breakdown_QB whereBreakdownProblem($value)
     * @method _IH_Breakdown_QB whereBreakdownParts($value)
     * @method _IH_Breakdown_QB whereDescription($value)
     * @method _IH_Breakdown_QB whereCompleteDate($value)
     * @method _IH_Breakdown_QB whereActionBy($value)
     * @method _IH_Breakdown_QB whereReviewedBy($value)
     * @method _IH_Breakdown_QB whereRemarks($value)
     * @method Breakdown baseSole(array|string $columns = ['*'])
     * @method Breakdown create(array $attributes = [])
     * @method _IH_Breakdown_C|Breakdown[] cursor()
     * @method Breakdown|null|_IH_Breakdown_C|Breakdown[] find($id, array|string $columns = ['*'])
     * @method _IH_Breakdown_C|Breakdown[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Breakdown|_IH_Breakdown_C|Breakdown[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Breakdown|_IH_Breakdown_C|Breakdown[] findOrFail($id, array|string $columns = ['*'])
     * @method Breakdown|_IH_Breakdown_C|Breakdown[] findOrNew($id, array|string $columns = ['*'])
     * @method Breakdown first(array|string $columns = ['*'])
     * @method Breakdown firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Breakdown firstOrCreate(array $attributes = [], array $values = [])
     * @method Breakdown firstOrFail(array|string $columns = ['*'])
     * @method Breakdown firstOrNew(array $attributes = [], array $values = [])
     * @method Breakdown firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Breakdown forceCreate(array $attributes)
     * @method _IH_Breakdown_C|Breakdown[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Breakdown_C|Breakdown[] get(array|string $columns = ['*'])
     * @method Breakdown getModel()
     * @method Breakdown[] getModels(array|string $columns = ['*'])
     * @method _IH_Breakdown_C|Breakdown[] hydrate(array $items)
     * @method Breakdown make(array $attributes = [])
     * @method Breakdown newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Breakdown[]|_IH_Breakdown_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Breakdown[]|_IH_Breakdown_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Breakdown sole(array|string $columns = ['*'])
     * @method Breakdown updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Breakdown_QB extends _BaseBuilder {}

    /**
     * @method Fieldequip|null getOrPut($key, $value)
     * @method Fieldequip|$this shift(int $count = 1)
     * @method Fieldequip|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Fieldequip|$this pop(int $count = 1)
     * @method Fieldequip|null pull($key, \Closure $default = null)
     * @method Fieldequip|null last(callable $callback = null, \Closure $default = null)
     * @method Fieldequip|$this random(callable|int|null $number = null)
     * @method Fieldequip|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Fieldequip|null get($key, \Closure $default = null)
     * @method Fieldequip|null first(callable $callback = null, \Closure $default = null)
     * @method Fieldequip|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Fieldequip|null find($key, $default = null)
     * @method Fieldequip[] all()
     */
    class _IH_Fieldequip_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Fieldequip[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Fieldequip_QB whereIdentificationNo($value)
     * @method _IH_Fieldequip_QB whereEquipmentName($value)
     * @method _IH_Fieldequip_QB whereCategory($value)
     * @method _IH_Fieldequip_QB whereSerialNo($value)
     * @method _IH_Fieldequip_QB whereSoftwareVersion($value)
     * @method _IH_Fieldequip_QB whereManufacturerName($value)
     * @method _IH_Fieldequip_QB whereSupplierName($value)
     * @method _IH_Fieldequip_QB whereClassification($value)
     * @method _IH_Fieldequip_QB whereDateReceived($value)
     * @method _IH_Fieldequip_QB whereServiceDate($value)
     * @method _IH_Fieldequip_QB whereLocation($value)
     * @method _IH_Fieldequip_QB whereOperationSection($value)
     * @method _IH_Fieldequip_QB whereManualLocation($value)
     * @method _IH_Fieldequip_QB whereAuthorizedUser($value)
     * @method _IH_Fieldequip_QB whereEquipLimit($value)
     * @method _IH_Fieldequip_QB whereTechnicalInfo($value)
     * @method _IH_Fieldequip_QB whereGrouping($value)
     * @method _IH_Fieldequip_QB whereFrequency($value)
     * @method _IH_Fieldequip_QB whereExecutor($value)
     * @method _IH_Fieldequip_QB whereRegistrant($value)
     * @method _IH_Fieldequip_QB whereRegistrantDate($value)
     * @method _IH_Fieldequip_QB whereAuthorizer($value)
     * @method _IH_Fieldequip_QB whereAuthorizedDate($value)
     * @method _IH_Fieldequip_QB whereDeclaration($value)
     * @method _IH_Fieldequip_QB whereDeclarationDate($value)
     * @method _IH_Fieldequip_QB whereComment($value)
     * @method _IH_Fieldequip_QB whereCommentApprover($value)
     * @method _IH_Fieldequip_QB whereCommentApprovalDate($value)
     * @method _IH_Fieldequip_QB whereNotifiedBy($value)
     * @method Fieldequip baseSole(array|string $columns = ['*'])
     * @method Fieldequip create(array $attributes = [])
     * @method _IH_Fieldequip_C|Fieldequip[] cursor()
     * @method Fieldequip|null|_IH_Fieldequip_C|Fieldequip[] find($id, array|string $columns = ['*'])
     * @method _IH_Fieldequip_C|Fieldequip[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Fieldequip|_IH_Fieldequip_C|Fieldequip[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Fieldequip|_IH_Fieldequip_C|Fieldequip[] findOrFail($id, array|string $columns = ['*'])
     * @method Fieldequip|_IH_Fieldequip_C|Fieldequip[] findOrNew($id, array|string $columns = ['*'])
     * @method Fieldequip first(array|string $columns = ['*'])
     * @method Fieldequip firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Fieldequip firstOrCreate(array $attributes = [], array $values = [])
     * @method Fieldequip firstOrFail(array|string $columns = ['*'])
     * @method Fieldequip firstOrNew(array $attributes = [], array $values = [])
     * @method Fieldequip firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Fieldequip forceCreate(array $attributes)
     * @method _IH_Fieldequip_C|Fieldequip[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Fieldequip_C|Fieldequip[] get(array|string $columns = ['*'])
     * @method Fieldequip getModel()
     * @method Fieldequip[] getModels(array|string $columns = ['*'])
     * @method _IH_Fieldequip_C|Fieldequip[] hydrate(array $items)
     * @method Fieldequip make(array $attributes = [])
     * @method Fieldequip newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Fieldequip[]|_IH_Fieldequip_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Fieldequip[]|_IH_Fieldequip_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Fieldequip sole(array|string $columns = ['*'])
     * @method Fieldequip updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Fieldequip_QB extends _BaseBuilder {}

    /**
     * @method Membership|null getOrPut($key, $value)
     * @method Membership|$this shift(int $count = 1)
     * @method Membership|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Membership|$this pop(int $count = 1)
     * @method Membership|null pull($key, \Closure $default = null)
     * @method Membership|null last(callable $callback = null, \Closure $default = null)
     * @method Membership|$this random(callable|int|null $number = null)
     * @method Membership|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Membership|null get($key, \Closure $default = null)
     * @method Membership|null first(callable $callback = null, \Closure $default = null)
     * @method Membership|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Membership|null find($key, $default = null)
     * @method Membership[] all()
     */
    class _IH_Membership_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Membership[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Membership baseSole(array|string $columns = ['*'])
     * @method Membership create(array $attributes = [])
     * @method _IH_Membership_C|Membership[] cursor()
     * @method Membership|null|_IH_Membership_C|Membership[] find($id, array|string $columns = ['*'])
     * @method _IH_Membership_C|Membership[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Membership|_IH_Membership_C|Membership[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Membership|_IH_Membership_C|Membership[] findOrFail($id, array|string $columns = ['*'])
     * @method Membership|_IH_Membership_C|Membership[] findOrNew($id, array|string $columns = ['*'])
     * @method Membership first(array|string $columns = ['*'])
     * @method Membership firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Membership firstOrCreate(array $attributes = [], array $values = [])
     * @method Membership firstOrFail(array|string $columns = ['*'])
     * @method Membership firstOrNew(array $attributes = [], array $values = [])
     * @method Membership firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Membership forceCreate(array $attributes)
     * @method _IH_Membership_C|Membership[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Membership_C|Membership[] get(array|string $columns = ['*'])
     * @method Membership getModel()
     * @method Membership[] getModels(array|string $columns = ['*'])
     * @method _IH_Membership_C|Membership[] hydrate(array $items)
     * @method Membership make(array $attributes = [])
     * @method Membership newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Membership[]|_IH_Membership_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Membership[]|_IH_Membership_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Membership sole(array|string $columns = ['*'])
     * @method Membership updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Membership_QB extends _BaseBuilder {}

    /**
     * @method Post|null getOrPut($key, $value)
     * @method Post|$this shift(int $count = 1)
     * @method Post|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Post|$this pop(int $count = 1)
     * @method Post|null pull($key, \Closure $default = null)
     * @method Post|null last(callable $callback = null, \Closure $default = null)
     * @method Post|$this random(callable|int|null $number = null)
     * @method Post|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Post|null get($key, \Closure $default = null)
     * @method Post|null first(callable $callback = null, \Closure $default = null)
     * @method Post|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Post|null find($key, $default = null)
     * @method Post[] all()
     */
    class _IH_Post_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Post[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Post baseSole(array|string $columns = ['*'])
     * @method Post create(array $attributes = [])
     * @method _IH_Post_C|Post[] cursor()
     * @method Post|null|_IH_Post_C|Post[] find($id, array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Post|_IH_Post_C|Post[] findOrFail($id, array|string $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOrNew($id, array|string $columns = ['*'])
     * @method Post first(array|string $columns = ['*'])
     * @method Post firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Post firstOrCreate(array $attributes = [], array $values = [])
     * @method Post firstOrFail(array|string $columns = ['*'])
     * @method Post firstOrNew(array $attributes = [], array $values = [])
     * @method Post firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Post forceCreate(array $attributes)
     * @method _IH_Post_C|Post[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Post_C|Post[] get(array|string $columns = ['*'])
     * @method Post getModel()
     * @method Post[] getModels(array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] hydrate(array $items)
     * @method Post make(array $attributes = [])
     * @method Post newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Post[]|_IH_Post_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Post[]|_IH_Post_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Post sole(array|string $columns = ['*'])
     * @method Post updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Post_QB extends _BaseBuilder {}

    /**
     * @method Report|null getOrPut($key, $value)
     * @method Report|$this shift(int $count = 1)
     * @method Report|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Report|$this pop(int $count = 1)
     * @method Report|null pull($key, \Closure $default = null)
     * @method Report|null last(callable $callback = null, \Closure $default = null)
     * @method Report|$this random(callable|int|null $number = null)
     * @method Report|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Report|null get($key, \Closure $default = null)
     * @method Report|null first(callable $callback = null, \Closure $default = null)
     * @method Report|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Report|null find($key, $default = null)
     * @method Report[] all()
     */
    class _IH_Report_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Report[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Report_QB whereIdentificationNo($value)
     * @method _IH_Report_QB whereEquipmentName($value)
     * @method _IH_Report_QB whereCategory($value)
     * @method _IH_Report_QB whereSerialNo($value)
     * @method _IH_Report_QB whereSoftwareVersion($value)
     * @method _IH_Report_QB whereManufacturerName($value)
     * @method _IH_Report_QB whereSupplierName($value)
     * @method _IH_Report_QB whereClassification($value)
     * @method _IH_Report_QB whereDateReceived($value)
     * @method _IH_Report_QB whereServiceDate($value)
     * @method _IH_Report_QB whereLocation($value)
     * @method _IH_Report_QB whereOperationSection($value)
     * @method _IH_Report_QB whereManualLocation($value)
     * @method _IH_Report_QB whereAuthorizedUser($value)
     * @method _IH_Report_QB whereEquipLimit($value)
     * @method _IH_Report_QB whereTechnicalInfo($value)
     * @method _IH_Report_QB whereGrouping($value)
     * @method _IH_Report_QB whereFrequency($value)
     * @method _IH_Report_QB whereExecutor($value)
     * @method _IH_Report_QB whereRegistrant($value)
     * @method _IH_Report_QB whereRegistrantDate($value)
     * @method _IH_Report_QB whereAuthorizer($value)
     * @method _IH_Report_QB whereAuthorizedDate($value)
     * @method _IH_Report_QB whereDeclaration($value)
     * @method _IH_Report_QB whereDeclarationDate($value)
     * @method _IH_Report_QB whereComment($value)
     * @method _IH_Report_QB whereCommentApprover($value)
     * @method _IH_Report_QB whereCommentApprovalDate($value)
     * @method _IH_Report_QB whereNotifiedBy($value)
     * @method Report baseSole(array|string $columns = ['*'])
     * @method Report create(array $attributes = [])
     * @method _IH_Report_C|Report[] cursor()
     * @method Report|null|_IH_Report_C|Report[] find($id, array|string $columns = ['*'])
     * @method _IH_Report_C|Report[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Report|_IH_Report_C|Report[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Report|_IH_Report_C|Report[] findOrFail($id, array|string $columns = ['*'])
     * @method Report|_IH_Report_C|Report[] findOrNew($id, array|string $columns = ['*'])
     * @method Report first(array|string $columns = ['*'])
     * @method Report firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Report firstOrCreate(array $attributes = [], array $values = [])
     * @method Report firstOrFail(array|string $columns = ['*'])
     * @method Report firstOrNew(array $attributes = [], array $values = [])
     * @method Report firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Report forceCreate(array $attributes)
     * @method _IH_Report_C|Report[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Report_C|Report[] get(array|string $columns = ['*'])
     * @method Report getModel()
     * @method Report[] getModels(array|string $columns = ['*'])
     * @method _IH_Report_C|Report[] hydrate(array $items)
     * @method Report make(array $attributes = [])
     * @method Report newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Report[]|_IH_Report_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Report[]|_IH_Report_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Report sole(array|string $columns = ['*'])
     * @method Report updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Report_QB extends _BaseBuilder {}

    /**
     * @method Student|null getOrPut($key, $value)
     * @method Student|$this shift(int $count = 1)
     * @method Student|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Student|$this pop(int $count = 1)
     * @method Student|null pull($key, \Closure $default = null)
     * @method Student|null last(callable $callback = null, \Closure $default = null)
     * @method Student|$this random(callable|int|null $number = null)
     * @method Student|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Student|null get($key, \Closure $default = null)
     * @method Student|null first(callable $callback = null, \Closure $default = null)
     * @method Student|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Student|null find($key, $default = null)
     * @method Student[] all()
     */
    class _IH_Student_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Student[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Student_QB whereId($value)
     * @method _IH_Student_QB whereName($value)
     * @method _IH_Student_QB whereGender($value)
     * @method _IH_Student_QB whereGrade($value)
     * @method _IH_Student_QB whereEmail($value)
     * @method _IH_Student_QB whereMobileNumber($value)
     * @method _IH_Student_QB whereCreatedAt($value)
     * @method _IH_Student_QB whereUpdatedAt($value)
     * @method Student baseSole(array|string $columns = ['*'])
     * @method Student create(array $attributes = [])
     * @method _IH_Student_C|Student[] cursor()
     * @method Student|null|_IH_Student_C|Student[] find($id, array|string $columns = ['*'])
     * @method _IH_Student_C|Student[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Student|_IH_Student_C|Student[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Student|_IH_Student_C|Student[] findOrFail($id, array|string $columns = ['*'])
     * @method Student|_IH_Student_C|Student[] findOrNew($id, array|string $columns = ['*'])
     * @method Student first(array|string $columns = ['*'])
     * @method Student firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Student firstOrCreate(array $attributes = [], array $values = [])
     * @method Student firstOrFail(array|string $columns = ['*'])
     * @method Student firstOrNew(array $attributes = [], array $values = [])
     * @method Student firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Student forceCreate(array $attributes)
     * @method _IH_Student_C|Student[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Student_C|Student[] get(array|string $columns = ['*'])
     * @method Student getModel()
     * @method Student[] getModels(array|string $columns = ['*'])
     * @method _IH_Student_C|Student[] hydrate(array $items)
     * @method Student make(array $attributes = [])
     * @method Student newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Student[]|_IH_Student_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Student[]|_IH_Student_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Student sole(array|string $columns = ['*'])
     * @method Student updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Student_QB extends _BaseBuilder {}

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

    /**
     * @method Team|null getOrPut($key, $value)
     * @method Team|$this shift(int $count = 1)
     * @method Team|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Team|$this pop(int $count = 1)
     * @method Team|null pull($key, \Closure $default = null)
     * @method Team|null last(callable $callback = null, \Closure $default = null)
     * @method Team|$this random(callable|int|null $number = null)
     * @method Team|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Team|null get($key, \Closure $default = null)
     * @method Team|null first(callable $callback = null, \Closure $default = null)
     * @method Team|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Team|null find($key, $default = null)
     * @method Team[] all()
     */
    class _IH_Team_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Team[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Team_QB whereId($value)
     * @method _IH_Team_QB whereUserId($value)
     * @method _IH_Team_QB whereName($value)
     * @method _IH_Team_QB wherePersonalTeam($value)
     * @method _IH_Team_QB whereCreatedAt($value)
     * @method _IH_Team_QB whereUpdatedAt($value)
     * @method Team baseSole(array|string $columns = ['*'])
     * @method Team create(array $attributes = [])
     * @method _IH_Team_C|Team[] cursor()
     * @method Team|null|_IH_Team_C|Team[] find($id, array|string $columns = ['*'])
     * @method _IH_Team_C|Team[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Team|_IH_Team_C|Team[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Team|_IH_Team_C|Team[] findOrFail($id, array|string $columns = ['*'])
     * @method Team|_IH_Team_C|Team[] findOrNew($id, array|string $columns = ['*'])
     * @method Team first(array|string $columns = ['*'])
     * @method Team firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Team firstOrCreate(array $attributes = [], array $values = [])
     * @method Team firstOrFail(array|string $columns = ['*'])
     * @method Team firstOrNew(array $attributes = [], array $values = [])
     * @method Team firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Team forceCreate(array $attributes)
     * @method _IH_Team_C|Team[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Team_C|Team[] get(array|string $columns = ['*'])
     * @method Team getModel()
     * @method Team[] getModels(array|string $columns = ['*'])
     * @method _IH_Team_C|Team[] hydrate(array $items)
     * @method Team make(array $attributes = [])
     * @method Team newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Team[]|_IH_Team_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Team[]|_IH_Team_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Team sole(array|string $columns = ['*'])
     * @method Team updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Team_QB extends _BaseBuilder {}

    /**
     * @method Teamuser|null getOrPut($key, $value)
     * @method Teamuser|$this shift(int $count = 1)
     * @method Teamuser|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Teamuser|$this pop(int $count = 1)
     * @method Teamuser|null pull($key, \Closure $default = null)
     * @method Teamuser|null last(callable $callback = null, \Closure $default = null)
     * @method Teamuser|$this random(callable|int|null $number = null)
     * @method Teamuser|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Teamuser|null get($key, \Closure $default = null)
     * @method Teamuser|null first(callable $callback = null, \Closure $default = null)
     * @method Teamuser|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Teamuser|null find($key, $default = null)
     * @method Teamuser[] all()
     */
    class _IH_Teamuser_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Teamuser[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Teamuser_QB whereId($value)
     * @method _IH_Teamuser_QB whereTeamId($value)
     * @method _IH_Teamuser_QB whereUserId($value)
     * @method _IH_Teamuser_QB whereRole($value)
     * @method _IH_Teamuser_QB whereCreatedAt($value)
     * @method _IH_Teamuser_QB whereUpdatedAt($value)
     * @method Teamuser baseSole(array|string $columns = ['*'])
     * @method Teamuser create(array $attributes = [])
     * @method _IH_Teamuser_C|Teamuser[] cursor()
     * @method Teamuser|null|_IH_Teamuser_C|Teamuser[] find($id, array|string $columns = ['*'])
     * @method _IH_Teamuser_C|Teamuser[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Teamuser|_IH_Teamuser_C|Teamuser[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Teamuser|_IH_Teamuser_C|Teamuser[] findOrFail($id, array|string $columns = ['*'])
     * @method Teamuser|_IH_Teamuser_C|Teamuser[] findOrNew($id, array|string $columns = ['*'])
     * @method Teamuser first(array|string $columns = ['*'])
     * @method Teamuser firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Teamuser firstOrCreate(array $attributes = [], array $values = [])
     * @method Teamuser firstOrFail(array|string $columns = ['*'])
     * @method Teamuser firstOrNew(array $attributes = [], array $values = [])
     * @method Teamuser firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Teamuser forceCreate(array $attributes)
     * @method _IH_Teamuser_C|Teamuser[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Teamuser_C|Teamuser[] get(array|string $columns = ['*'])
     * @method Teamuser getModel()
     * @method Teamuser[] getModels(array|string $columns = ['*'])
     * @method _IH_Teamuser_C|Teamuser[] hydrate(array $items)
     * @method Teamuser make(array $attributes = [])
     * @method Teamuser newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Teamuser[]|_IH_Teamuser_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Teamuser[]|_IH_Teamuser_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Teamuser sole(array|string $columns = ['*'])
     * @method Teamuser updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Teamuser_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCurrentTeamId($value)
     * @method _IH_User_QB whereProfilePhotoPath($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereTwoFactorSecret($value)
     * @method _IH_User_QB whereTwoFactorRecoveryCodes($value)
     * @method _IH_User_QB whereTwoFactorConfirmedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}
