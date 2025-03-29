<?php

namespace App\Models\Management\InProgressOrder;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InProgressOrder extends Model
{
    use HasFactory;
    protected $fillable =  ['erp_user_id',
        'erp_status',
        'erp_order_topic',
        'erp_order_text',
        'erp_order_message',
        'erp_academic_name',
        'erp_academic_description',
        'erp_paper_type',
        'erp_paper_description',
        'erp_subject_name',
        'erp_subject_description',
        'erp_paper_format',
        'erp_format_description',
        'erp_commission_level',
        'erp_language_name',
        'erp_resource_materials',
        'erp_resource_file',
        'erp_number_Pages',
        'erp_spacing',
        'erp_powerPoint_slides',
        'erp_extra_source',
        'erp_deadline',
        'erp_copy_sources',
        'erp_page_summary',
        'erp_paper_outline',
        'erp_abstract_page',
        'erp_statistical_analysis',
    ];
}
