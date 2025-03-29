<?php

namespace App\Models\Management\ManageOrders\CreateOrder;

use App\Models\Management\TeamOrder\TeamOrder;
use App\Models\Management\OrderSettings\DocumentType\DocumentType;
use App\Models\Management\OrderSettings\Citation_Style\Citation_Style;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class CreateOrder extends Model
{
    use HasFactory;
    protected $with=['paperformat','papertype'];

    protected $fillable =  ['erp_user_id',
                            'erp_status',
                            'reason',
                            'return_user',
                            'erp_order_topic',
                            'erp_order_text',
                            'erp_order_message',
                            'erp_academic_name',
                            'erp_academic_description',
                            'erp_paper_type',
                            'papertype_desc',
                            'papertype_file',
                            'erp_paper_description',
                            'erp_subject_name',
                            'erp_subject_description',
                            'erp_paper_format',
                            'paperformat_desc',
                            'paperformat_file',
                            'erp_format_description',
                            'erp_team',
                            'all_team',
                            'erp_language_name',
                            'erp_resource_materials',
                            'erp_resource_file',
                            'erp_number_Pages',
                            'erp_datetime',
                            'erp_spacing',
                            'erp_powerPoint_slides',
                            'erp_extra_source',
                            'erp_deadline',
                            'erp_copy_sources',
                            'erp_page_summary',
                            'erp_paper_outline',
                            'erp_abstract_page',
                            'erp_statistical_analysis',
                            'erp_datetime',
                            'erp_previous',
    ];



    public function teamuser()
    {
        return $this->hasMany(TeamOrder::class,'erp_order_id');

//        return $this->belongsTo(Teams::class,'erp_order_id');
    }
     public function users()
        {
            return $this->belongsTo(User::class, 'return_user');
        }
    public function paperformat()
    {
        return $this->belongsTo(Citation_Style::class, 'erp_paper_format');
    }

    public function papertype()
    {
        return $this->belongsTo(DocumentType::class, 'erp_paper_type');
    }


}
