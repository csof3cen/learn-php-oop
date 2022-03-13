<?php

namespace Class\Interface;

class BasicPDF implements PDFDownloader
{
  public function downloadPDF(): string
  {
    return 'Downloading PDF...';
  }
}