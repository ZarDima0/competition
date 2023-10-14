<?php

namespace App\Models\Contest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contest\ContestLevel
 *
 * @property int $id
 * @property string $contest_start_date Начала конкурса
 * @property string $contest_end_date Конец конкурса
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContestLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContestLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContestLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContestLevel whereContestEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContestLevel whereContestStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContestLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContestLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContestLevel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ContestLevel extends Model
{
    use HasFactory;
    protected $table = 'contest_levels';
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ContestLevel
     */
    public function setId(int $id): ContestLevel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getContestStartDate(): string
    {
        return $this->contest_start_date;
    }

    /**
     * @param string $contest_start_date
     * @return ContestLevel
     */
    public function setContestStartDate(string $contest_start_date): ContestLevel
    {
        $this->contest_start_date = $contest_start_date;
        return $this;
    }

    /**
     * @return string
     */
    public function getContestEndDate(): string
    {
        return $this->contest_end_date;
    }

    /**
     * @param string $contest_end_date
     * @return ContestLevel
     */
    public function setContestEndDate(string $contest_end_date): ContestLevel
    {
        $this->contest_end_date = $contest_end_date;
        return $this;
    }

    /**
     * @return \Illuminate\Support\Carbon|null
     */
    public function getCreatedAt(): ?\Illuminate\Support\Carbon
    {
        return $this->created_at;
    }

    /**
     * @param \Illuminate\Support\Carbon|null $created_at
     * @return ContestLevel
     */
    public function setCreatedAt(?\Illuminate\Support\Carbon $created_at): ContestLevel
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return \Illuminate\Support\Carbon|null
     */
    public function getUpdatedAt(): ?\Illuminate\Support\Carbon
    {
        return $this->updated_at;
    }

    /**
     * @param \Illuminate\Support\Carbon|null $updated_at
     * @return ContestLevel
     */
    public function setUpdatedAt(?\Illuminate\Support\Carbon $updated_at): ContestLevel
    {
        $this->updated_at = $updated_at;
        return $this;
    }
}
