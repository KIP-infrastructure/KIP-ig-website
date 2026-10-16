# Plasma Analyse - kræft diagnose 202412 - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Plasma Analyse - kræft diagnose 202412**

## ValueSet: Plasma Analyse - kræft diagnose 202412 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PlasmaDiagnose202412 | *Version*:2.27.0 |
| Active as of 2024-11-29 | *Computable Name*:PlasmaDiagnose202412 |

 
Plasma analyse - kræft diagnose kriterier [DAMYDA] 

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
  "id" : "PlasmaDiagnose202412",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PlasmaDiagnose202412",
  "version" : "2.27.0",
  "name" : "PlasmaDiagnose202412",
  "title" : "Plasma Analyse - kræft diagnose 202412",
  "status" : "active",
  "date" : "2024-11-29T00:00:00+02:00",
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
  "description" : "Plasma analyse - kræft diagnose kriterier [DAMYDA]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "smouldering_mm",
        "display" : "Smouldering MM"
      },
      {
        "code" : "myelomatosis",
        "display" : "Myelomatose"
      },
      {
        "code" : "solitary_myelom_osseus",
        "display" : "Solitært myelom (ossøst)"
      },
      {
        "code" : "solitary_myelom_extra_osseus",
        "display" : "Solitært myelom (ekstraossøst)"
      },
      {
        "code" : "plasma_cell_leukemia",
        "display" : "Plasmacelleleukæmi"
      },
      {
        "code" : "ZM973A3",
        "display" : "POEMS"
      }]
    }]
  }
}

```
