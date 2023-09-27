<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemplateRequest;
use App\Http\Requests\UpdateTemplateRequest;
use App\Http\Resources\TemplateResource;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index() {
        $template = Template::all();
        return TemplateResource::collection($template);
    }

    public function store(StoreTemplateRequest $request) {
        $request->validated($request->all());
        $template = Template::create($request->all());
        return TemplateResource::make($template);
    }


    public function update(UpdateTemplateRequest $request , Template $template){
        $request->validated($request->all());
        $template->update($request->all());
        return TemplateResource::make($template);
    }

    public function show(Template $template) {
        return TemplateResource::make($template);
    }

    public function destroy(Template $template){
        $template->delete();
        return  'Deleted Successfully From Our System';
    }
}
