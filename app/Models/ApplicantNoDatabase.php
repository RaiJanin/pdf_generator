<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ApplicantNoDatabase extends Model
{
    public static function formContents(Request $request)
    {
        $workExps = [];
        $schoolBgItems = [];

        foreach($request->work_exp as $company)
        {
            $workExps[] = [
                'job_company' => $company['job_company'],
                'job_title' => $company['job_title'],
                'job_period' => $company['job_period'],
                'job_desc' =>$company['job_desc']
            ];
        }

        foreach($request->school_bg as $school)
        {
            $schoolBgItems[] = [
                'degree' => $school['bach_degr'],
                'institution' => $school['insti'],
                'school_year' => $school['sch_year'],
                'awards' => $school['sch_award']
            ];
        }
        return [
            'appli_name' => $request->appli_firstName.' '.$request->appli_lastName,
            'appli_posi' => $request->appli_posi,
            'appli_addre' => $request->appli_addre,
            'appli_email' => $request->appli_email,
            'contct_num' => $request->contct_num,
            'appli_fb' => $request->appli_fb,
            'skills' => $request->appli_skills,
            'work_items' => $workExps,
            'schools' => $schoolBgItems
        ];
    }
}
