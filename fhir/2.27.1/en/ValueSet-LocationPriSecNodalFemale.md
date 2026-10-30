# Sygdomslokalisation er prim. nodalt, sek. ekstranodalt eller omv, kvinder (LYFO) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomslokalisation er prim. nodalt, sek. ekstranodalt eller omv, kvinder (LYFO)**

## ValueSet: Sygdomslokalisation er prim. nodalt, sek. ekstranodalt eller omv, kvinder (LYFO) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LocationPriSecNodalFemale | *Version*:2.27.1 |
| Active as of 2023-03-15 | *Computable Name*:LocationPriSecNodalFemale |

 
Sygdomslokalisation i lymfe områder er primært nodalt, sekundært ekstranodalt eller primært ekstranodalt, sekundært nodalt, og patienten er en kvinde (LYFO) 

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
  "id" : "LocationPriSecNodalFemale",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LocationPriSecNodalFemale",
  "version" : "2.27.1",
  "name" : "LocationPriSecNodalFemale",
  "title" : "Sygdomslokalisation er prim. nodalt, sek. ekstranodalt eller omv, kvinder (LYFO)",
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
  "description" : "Sygdomslokalisation i lymfe områder er primært nodalt, sekundært ekstranodalt eller primært ekstranodalt, sekundært nodalt, og patienten er en kvinde (LYFO)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "T000174",
        "display" : "Axiller"
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
        "code" : "T001039",
        "display" : "CNS"
      },
      {
        "code" : "T000438",
        "display" : "Cor"
      },
      {
        "code" : "T001022",
        "display" : "Gl. thyroidea"
      },
      {
        "code" : "T000146",
        "display" : "Hals, Øvre"
      },
      {
        "code" : "T000010",
        "display" : "Hud"
      },
      {
        "code" : "T000154",
        "display" : "Infraclaviculært"
      },
      {
        "code" : "T000177",
        "display" : "Ingvinale"
      },
      {
        "code" : "T000492",
        "display" : "Intravaskulært"
      },
      {
        "code" : "T000224",
        "display" : "Knogler"
      },
      {
        "code" : "T001057",
        "display" : "Leptomeninges"
      },
      {
        "code" : "T000607",
        "display" : "Lever"
      },
      {
        "code" : "T000400",
        "display" : "Lungehili"
      },
      {
        "code" : "T000398",
        "display" : "Lunge"
      },
      {
        "code" : "T000094",
        "display" : "Mamma"
      },
      {
        "code" : "T001210",
        "display" : "Mediastinum"
      },
      {
        "code" : "T000569",
        "display" : "Mundhule i øvrigt"
      },
      {
        "code" : "T000298",
        "display" : "Muskulatur"
      },
      {
        "code" : "T000773",
        "display" : "Nyrer"
      },
      {
        "code" : "T001182",
        "display" : "Orbita"
      },
      {
        "code" : "T000948",
        "display" : "Ovarier"
      },
      {
        "code" : "T000638",
        "display" : "Pancreas"
      },
      {
        "code" : "T001231",
        "display" : "Pelvis"
      },
      {
        "code" : "T001227",
        "display" : "Retroperitoneum"
      },
      {
        "code" : "T000647",
        "display" : "Rhinopharynx"
      },
      {
        "code" : "T000600",
        "display" : "Spytkirtler"
      },
      {
        "code" : "T000148",
        "display" : "Supraclaviculært"
      },
      {
        "code" : "T000702",
        "display" : "Tarmkrøs"
      },
      {
        "code" : "T000657",
        "display" : "Tonsilla Palatina"
      },
      {
        "code" : "T000725",
        "display" : "Tyktarm"
      },
      {
        "code" : "T000695",
        "display" : "Tyndtarm"
      },
      {
        "code" : "T001145",
        "display" : "Tårekirtel"
      },
      {
        "code" : "T000812",
        "display" : "Urinblære"
      },
      {
        "code" : "T000898",
        "display" : "Uterus"
      },
      {
        "code" : "T000892",
        "display" : "Vagina"
      },
      {
        "code" : "T000670",
        "display" : "Ventrikel"
      },
      {
        "code" : "T000654",
        "display" : "Waldeyers svælgring"
      },
      {
        "code" : "T001127",
        "display" : "Øje"
      },
      {
        "code" : "T000842",
        "display" : "Testis"
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
