<?php

namespace Class\Interface;

interface PDFDownloader
{
  // NB: Une interface définie la signature des méthodes à être implémentée
  // Toutes les méthodes d'une interface doivent être en public
  // Les interfaces n'incluent pas de propriétés mais on peut y définir des constantes
  // On peut aussi y définir une signature du constructeur
  // Les paramètres des signatures de méthodes doivent aussi être implémentés
  // Une classe peut implémenter plusieurs interfaces
  // Une interface peut aussi hériter d'une autre interface
  public function downloadPDF(): string;
}