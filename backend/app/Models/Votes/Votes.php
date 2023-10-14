<?php

namespace App\Models\Votes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Votes\Votes
 *
 * @property int $id
 * @property int $participant_id Id участника
 * @property int $user_id Id user
 * @property int $contest_level_id Id конкурса
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Votes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Votes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Votes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereContestLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereParticipantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Votes whereUserId($value)
 * @mixin \Eloquent
 */
class Votes extends Model
{
    protected $table = 'votes';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Votes
     */
    public function setId(int $id): Votes
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getParticipantId(): int
    {
        return $this->participant_id;
    }

    /**
     * @param int $participant_id
     * @return Votes
     */
    public function setParticipantId(int $participant_id): Votes
    {
        $this->participant_id = $participant_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return Votes
     */
    public function setUserId(int $user_id): Votes
    {
        $this->user_id = $user_id;
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
     * @return Votes
     */
    public function setContestLevelId(int $contest_level_id): Votes
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
     * @return Votes
     */
    public function setCreatedAt(?\Illuminate\Support\Carbon $created_at): Votes
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
     * @return Votes
     */
    public function setUpdatedAt(?\Illuminate\Support\Carbon $updated_at): Votes
    {
        $this->updated_at = $updated_at;
        return $this;
    }
}
