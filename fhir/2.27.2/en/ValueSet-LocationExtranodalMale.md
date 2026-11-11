# Sygdomslokalisation er kun ekstranodalt, mænd (LYFO) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomslokalisation er kun ekstranodalt, mænd (LYFO)**

## ValueSet: Sygdomslokalisation er kun ekstranodalt, mænd (LYFO) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LocationExtranodalMale | *Version*:2.27.2 |
| Active as of 2023-03-15 | *Computable Name*:LocationExtranodalMale |

 
Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en mand (LYFO) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "LocationExtranodalMale",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LocationExtranodalMale",
  "version" : "2.27.2",
  "name" : "LocationExtranodalMale",
  "title" : "Sygdomslokalisation er kun ekstranodalt, mænd (LYFO)",
  "status" : "active",
  "date" : "2023-03-15T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en mand (LYFO)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "T001182",
        "display" : "Orbita"
      },
      {
        "code" : "T001127",
        "display" : "Øje"
      },
      {
        "code" : "T001145",
        "display" : "Tårekirtel"
      },
      {
        "code" : "T000352",
        "display" : "Bihuler"
      },
      {
        "code" : "T000347",
        "display" : "Cavum nasi"
      },
      {
        "code" : "T000569",
        "display" : "Mundhule i øvrigt"
      },
      {
        "code" : "T000600",
        "display" : "Spytkirtler"
      },
      {
        "code" : "T001022",
        "display" : "Gl. thyroidea"
      },
      {
        "code" : "T000438",
        "display" : "Cor"
      },
      {
        "code" : "T000094",
        "display" : "Mamma"
      },
      {
        "code" : "T000398",
        "display" : "Lunge"
      },
      {
        "code" : "T000670",
        "display" : "Ventrikel"
      },
      {
        "code" : "T000695",
        "display" : "Tyndtarm"
      },
      {
        "code" : "T000725",
        "display" : "Tyktarm"
      },
      {
        "code" : "T000638",
        "display" : "Pancreas"
      },
      {
        "code" : "T000773",
        "display" : "Nyrer"
      },
      {
        "code" : "T000607",
        "display" : "Lever"
      },
      {
        "code" : "T000812",
        "display" : "Urinblære"
      },
      {
        "code" : "T000842",
        "display" : "Testis"
      },
      {
        "code" : "T000010",
        "display" : "Hud"
      },
      {
        "code" : "T000298",
        "display" : "Muskulatur"
      },
      {
        "code" : "T000224",
        "display" : "Knogler"
      },
      {
        "code" : "T000113",
        "display" : "Knoglemarv"
      },
      {
        "code" : "T001039",
        "display" : "CNS"
      },
      {
        "code" : "T001057",
        "display" : "Leptomeninges"
      },
      {
        "code" : "T000492",
        "display" : "Intravaskulært"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "ascites_lymfom",
        "display" : "Ascites med lymfomceller"
      },
      {
        "code" : "perikardieeksudat_lymfom",
        "display" : "Perikardieeksudat med lymfomceller"
      },
      {
        "code" : "pleuraeksudat_lymfom",
        "display" : "Pleuraeksudat med lymfomceller"
      }]
    }]
  }
}

```
