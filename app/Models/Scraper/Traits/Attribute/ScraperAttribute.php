<?php

namespace App\Models\Access\Scraper\Traits\Attribute;

/**
 * Class ScraperAttribute.
 */
trait ScraperAttribute
{

    /**
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        if ($this->isActive()) {
            return "<label class='label label-success'>".trans('labels.general.active').'</label>';
        }

        return "<label class='label label-danger'>".trans('labels.general.inactive').'</label>';
    }

    /**
     * @return string
     */
    public function getConfirmedLabelAttribute()
    {
        if ($this->isActive()) {
            return "<label class='label label-success'>".trans('labels.general.yes').'</label>';
        }

        return "<label class='label label-danger'>".trans('labels.general.no').'</label>';
    }

    /**
     * @return mixed
     */
    public function getPictureAttribute()
    {
        return $this->getPicture();
    }

    /**
     * @param bool $size
     *
     * @return mixed
     */
    public function getPicture($size = false)
    {
        if (! $size) {
            $size = config('gravatar.default.size');
        }

        return gravatar()->get($this->email, ['size' => $size]);
    }

    /**
     * @param $provider
     *
     * @return bool
     */
    public function hasProvider($provider)
    {
        foreach ($this->providers as $p) {
            if ($p->provider == $provider) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->status == 1;
    }

    /**
     * @return bool
     */
    public function isConfirmed()
    {
        return $this->confirmed == 1;
    }

    /**
     * @return string
     */
    public function getShowButtonAttribute()
    {
        return '<a href="'.route('admin.scraper.show', $this).'" class="btn btn-xs btn-info"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="Show"></i></a> ';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.scraper.edit', $this).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></a> ';
    }

    /**
     * @return string
     */
    public function getStatusButtonAttribute()
    {
        if ($this->id != access()->id()) {
            switch ($this->status) {
                case 0:
                    return '<a href="'.route('admin.scraper.mark', [
                        $this,
                        1,
                    ]).'" class="btn btn-xs btn-success"><i class="fa fa-play" data-toggle="tooltip" data-placement="top" title="Activate"></i></a> ';
                // No break

                case 1:
                    return '<a href="'.route('admin.scraper.mark', [
                        $this,
                        0,
                    ]).'" class="btn btn-xs btn-warning"><i class="fa fa-pause" data-toggle="tooltip" data-placement="top" title="Deactivate"></i></a> ';
                // No break

                default:
                    return '';
                // No break
            }
        }

        return '';
    }

    /**
     * @return string
     */
    public function getConfirmedButtonAttribute()
    {
        if (! $this->isConfirmed()) {

        }

        return '';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        if ($this->id != access()->id()) {
            return '<a href="'.route('admin.scraper.destroy', $this).'"
                 data-method="delete"
                 data-trans-button-cancel="Cancel"
                 data-trans-button-confirm="Delete"
                 data-trans-title="Are you sure?"
                 class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'"></i></a> ';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getRestoreButtonAttribute()
    {
        return '<a href="'.route('admin.scraper.restore', $this).'" name="restore_scraper" class="btn btn-xs btn-info"><i class="fa fa-refresh" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.backend.access.scrapers.restore_scraper').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getDeletePermanentlyButtonAttribute()
    {
        return '<a href="'.route('admin.scraper.delete-permanently', $this).'" name="delete_scraper_perm" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.backend.access.scrapers.delete_permanently').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getLoginAsButtonAttribute()
    {
        /*
         * If the admin is currently NOT spoofing a scraper
         */
        if (! session()->has('admin_scraper_id') || ! session()->has('temp_scraper_id')) {
            //Won't break, but don't let them "Login As" themselves
            if ($this->id != access()->id()) {
                return '<a href="'.route('admin.scraper.login-as',
                    $this).'" class="btn btn-xs btn-success"><i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.backend.access.scrapers.login_as',
                    ['scraper' => $this->name]).'"></i></a> ';
            }
        }

        return '';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        if ($this->trashed()) {
            return $this->getRestoreButtonAttribute().
                $this->getDeletePermanentlyButtonAttribute();
        }

        return
            $this->getLoginAsButtonAttribute().
            $this->getShowButtonAttribute().
            $this->getEditButtonAttribute().
            $this->getStatusButtonAttribute().
            $this->getConfirmedButtonAttribute().
            $this->getDeleteButtonAttribute();
    }
}
