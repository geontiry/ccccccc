<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait FileStorage
{
    public function verifyUploadStorePath(Request $request, $fieldname = 'image', $directory = 'unknown')
    {
        if ($request->hasFile($fieldname)) {
            if (!$request->file($fieldname)->isValid()) {
                flash('Invalid Image!')->error()->important();
                return redirect()->back()->withInput();
            }

            return $request->file($fieldname)->store('image/' . $directory, 'public');
        }

        return null;
    }
    public function verifyUploadStoreMeta(Request $request, $fieldname = 'image', $directory = 'unknown')
    {
        if ($request->hasFile($fieldname)) {
            if (!$request->file($fieldname)->isValid()) {
                flash('Invalid Image!')->error()->important();
                return redirect()->back()->withInput();
            }

            return $request->file($fieldname)->store('image/' . $directory, 'public');
        }

        return null;
    }
}
