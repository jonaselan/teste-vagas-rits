<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait CandidateTrait
{
    public function downloadCurriculum($path){
      // usando encode para dar um "escape" no caminho do arquivo
      $path = base64_decode($path);
      $fs = Storage::getDriver();
      $stream = $fs->readStream($path);

      return response()->stream(function() use($stream) {
          fpassthru($stream);
      }, 200, [
          'Content-Type' => $fs->getMimetype($path),
          "Content-Length" => $fs->getSize($path),
          'Content-Description' => 'File Transfer',
          'Content-Disposition' => "attachments; filename='Curriculo'",
          'filename' => 'Curriculo'
      ]);
    }
}
