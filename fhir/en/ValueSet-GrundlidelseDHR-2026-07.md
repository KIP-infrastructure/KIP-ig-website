# Grundlidelse [DHR] 2026-07 - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Grundlidelse [DHR] 2026-07**

## ValueSet: Grundlidelse [DHR] 2026-07 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GrundlidelseDHR-2026-07 | *Version*:2.27.3 |
| Active as of 2026-11-05 | *Computable Name*:GrundlidelseDHR202607 |

 
Grundlidelse [DHR] 

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
  "id" : "GrundlidelseDHR-2026-07",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GrundlidelseDHR-2026-07",
  "version" : "2.27.3",
  "name" : "GrundlidelseDHR202607",
  "title" : "Grundlidelse [DHR] 2026-07",
  "status" : "active",
  "date" : "2026-11-05T00:00:00+01:00",
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
  "description" : "Grundlidelse [DHR]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder",
      "concept" : [{
        "code" : "arthrosis",
        "display" : "Primær (idiopatisk) artrose"
      },
      {
        "code" : "femoral_no_operation",
        "display" : "Prox femurfraktur: uden OP (tidl ostesyntese eller hemi)"
      },
      {
        "code" : "femoral_previous_operation",
        "display" : "Prox femurfraktur: med tidl. OP (osteosyntese eller hemi)"
      },
      {
        "code" : "acetabulum_fracture",
        "display" : "Acetabulumfraktur"
      },
      {
        "code" : "traumatic",
        "display" : "Traumatisk hofteluksation"
      },
      {
        "code" : "caputnecrosis",
        "display" : "Atraumatisk caputnekrose"
      },
      {
        "code" : "rheumatoid",
        "display" : "Reumatoid artrit"
      },
      {
        "code" : "mb_bechterew",
        "display" : "Mb. Bechterew"
      },
      {
        "code" : "congenital",
        "display" : "Kongenit hofteluksation"
      },
      {
        "code" : "mb_calve_legg_perthes",
        "display" : "Mb. Calvé-Legg-Perthes"
      },
      {
        "code" : "epiphysiolysis",
        "display" : "Epifysiolyse"
      },
      {
        "code" : "acetabulum_dysplasia",
        "display" : "Acetabulumdysplasi"
      },
      {
        "code" : "primary_tumor",
        "display" : "Primær tumor"
      },
      {
        "code" : "metastases",
        "display" : "Metastaser"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
