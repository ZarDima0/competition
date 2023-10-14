<?php

namespace App\Models\Participant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Participant\Participant
 *
 * @property int $id
 * @property string $name Name участника
 * @property int $age Возраст
 * @property string $avatar Path image
 * @property int $contest_level_id id конкурса
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Participant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Participant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Participant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereContestLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Participant extends Model
{
    use HasFactory;

    protected $table = 'participants';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Participant
     */
    public function setId(int $id): Participant
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Participant
     */
    public function setName(string $name): Participant
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Participant
     */
    public function setAge(int $age): Participant
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvatar(): string
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     * @return Participant
     */
    public function setAvatar(string $avatar): Participant
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return int
     */
    public function getContestLevelId(): int
    {
        return $this->contest_level_id;
    }

    /**
     * @param int $contest_level_id
     * @return Participant
     */
    public function setContestLevelId(int $contest_level_id): Participant
    {
        $this->contest_level_id = $contest_level_id;
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
     * @return Participant
     */
    public function setCreatedAt(?\Illuminate\Support\Carbon $created_at): Participant
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
     * @return Participant
     */
    public function setUpdatedAt(?\Illuminate\Support\Carbon $updated_at): Participant
    {
        $this->updated_at = $updated_at;
        return $this;
    }
}
