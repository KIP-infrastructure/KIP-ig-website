# BinetStagingSystem - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BinetStagingSystem**

## ValueSet: BinetStagingSystem 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BinetStagingSystem | *Version*:2.27.2 |
| Active as of 2022-07-12 | *Computable Name*:BinetStagingSystem |

 
Binet staging system for Chroniz Lymphocytic Leukemia 

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
  "id" : "BinetStagingSystem",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BinetStagingSystem",
  "version" : "2.27.2",
  "name" : "BinetStagingSystem",
  "title" : "BinetStagingSystem",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Binet staging system for Chroniz Lymphocytic Leukemia",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BinetStagingSystem",
      "concept" : [{
        "code" : "stage_a",
        "display" : "Binet A: <3 regioner med forstørrede lymfeknuder, med fravær af anæmi og trombocytopeni."
      },
      {
        "code" : "stage_b",
        "display" : "Binet B: ≥3 regioner med forstørrede lymfeknuder og/eller anæmi (< 6.2 mmol/l), ingen trombocytopeni."
      },
      {
        "code" : "stage_c",
        "display" : "Binet C: Tilstedeværelse af anæmi (< 6.2 mmol/l) og trombocytopeni (< 100 mia/l)."
      }]
    }]
  }
}

```
