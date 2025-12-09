# Basic disorder - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Basic disorder**

## CodeSystem: Basic disorder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder | *Version*:2.17.1 |
| Active as of 2022-07-04 | *Computable Name*:BasicDisorder |

 
Basic disorder 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ArtritisDSR](ValueSet-ArtritisDSR.md)
* [ArtrosefoelgeDSR](ValueSet-ArtrosefoelgeDSR.md)
* [CaputnekroseDSR](ValueSet-CaputnekroseDSR.md)
* [GrundlidelseDHR](ValueSet-GrundlidelseDHR.md)
* [GrundlidelseDKR](ValueSet-GrundlidelseDKR.md)
* [GrundlidelseDSR](ValueSet-GrundlidelseDSR.md)
* [KomplikationerPeroperativeDKR](ValueSet-KomplikationerPeroperativeDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "BasicDisorder",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder",
  "version" : "2.17.1",
  "name" : "BasicDisorder",
  "title" : "Basic disorder",
  "status" : "active",
  "date" : "2022-07-04T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Basic disorder",
  "content" : "complete",
  "count" : 32,
  "concept" : [
    {
      "code" : "arthrosis",
      "display" : "Artrose",
      "definition" : "Artrose",
      "concept" : [
        {
          "code" : "secondary_arthrosis",
          "display" : "Sekundær artrose",
          "definition" : "Sekundær artrose"
        },
        {
          "code" : "instability",
          "display" : "Instabilitet",
          "definition" : "Instabilitet"
        }
      ]
    },
    {
      "code" : "fracture",
      "display" : "Fraktur",
      "definition" : "Fraktur",
      "concept" : [
        {
          "code" : "fracture_tibia",
          "display" : "Tibiafraktur",
          "definition" : "Tibiafraktur"
        },
        {
          "code" : "fresh_fracture_tibia_condyle",
          "display" : "Frisk tibiakondylfraktur",
          "definition" : "Frisk tibiakondylfraktur"
        },
        {
          "code" : "fracture_tibia_condyle",
          "display" : "Følger efter tibiakondylfraktur",
          "definition" : "Følger efter tibiakondylfraktur"
        },
        {
          "code" : "fracture_femur",
          "display" : "Femurfraktur",
          "definition" : "Femurfraktur"
        },
        {
          "code" : "fresh_fracture_femoral_condyle",
          "display" : "Frisk femurkondylfraktur",
          "definition" : "Frisk femurkondylfraktur"
        },
        {
          "code" : "fracture_femoral_condyle",
          "display" : "Følger efter tibiakondylfraktur",
          "definition" : "Følger efter tibiakondylfraktur"
        },
        {
          "code" : "fracture_patella",
          "display" : "Følger efter patellafraktur",
          "definition" : "Følger efter patellafraktur"
        }
      ]
    },
    {
      "code" : "femoral_fracture",
      "display" : "Femoral fracture",
      "definition" : "Femoral fracture",
      "concept" : [
        {
          "code" : "femoral_no_operation",
          "display" : "Prox femurfraktur: uden OP (tidl ostesyntese eller hemi)",
          "definition" : "Prox femurfraktur: uden OP (tidl ostesyntese eller hemi)"
        },
        {
          "code" : "femoral_previous_operation",
          "display" : "Prox femurfraktur: uden OP (tidl ostesyntese eller hemi)",
          "definition" : "Prox femurfraktur: med tidl. OP (osteosyntese eller hemi)"
        }
      ]
    },
    {
      "code" : "acetabulum_fracture",
      "display" : "Acetabulumfraktur",
      "definition" : "Acetabulumfraktur"
    },
    {
      "code" : "hip_dislocation",
      "display" : "Hofteluksation",
      "definition" : "Hofteluksation",
      "concept" : [
        {
          "code" : "traumatic",
          "display" : "Traumatisk",
          "definition" : "Traumatisk hofteluksation"
        },
        {
          "code" : "congenital",
          "display" : "Kongenit",
          "definition" : "Kongenit hofteluksation"
        }
      ]
    },
    {
      "code" : "caputnecrosis",
      "display" : "Caputnekrose",
      "definition" : "Caputnekrose"
    },
    {
      "code" : "osteonecrosis",
      "display" : "Osteonekrose",
      "definition" : "Osteonekrose"
    },
    {
      "code" : "arthritis",
      "display" : "Artrit",
      "definition" : "Artrit",
      "concept" : [
        {
          "code" : "rheumatoid",
          "display" : "Reumatoid",
          "definition" : "Reumatoid artrit"
        },
        {
          "code" : "other_arthritis",
          "display" : "Anden",
          "definition" : "Anden artrit"
        }
      ]
    },
    {
      "code" : "mb_bechterew",
      "display" : "Mb. Bechterew",
      "definition" : "Mb. Bechterew"
    },
    {
      "code" : "mb_calve_legg_perthes",
      "display" : "Mb. Calvé-Legg-Perthes",
      "definition" : "Mb. Calvé-Legg-Perthes"
    },
    {
      "code" : "epiphysiolysis",
      "display" : "Epifysiolyse",
      "definition" : "Epifysiolyse"
    },
    {
      "code" : "acetabulum_dysplasia",
      "display" : "Acetabulumdysplasi",
      "definition" : "Acetabulumdysplasi"
    },
    {
      "code" : "primary_tumor",
      "display" : "Primær tumor",
      "definition" : "Primær tumor"
    },
    {
      "code" : "metastases",
      "display" : "Metastaser",
      "definition" : "Metastaser"
    },
    {
      "code" : "cuff_rupture",
      "display" : "Flersenet rotator cuff ruptur uden degenerative forandringer",
      "definition" : "Flersenet rotator cuff ruptur uden degenerative forandringer"
    },
    {
      "code" : "cuff_rupture_degenerative",
      "display" : "Cuff artopati (Flersenet rotator cuff ruptur med degenerative forandringer)",
      "definition" : "Cuff artopati (Flersenet rotator cuff ruptur med degenerative forandringer)"
    },
    {
      "code" : "hemophilia",
      "display" : "Hæmofili",
      "definition" : "Hæmofili"
    }
  ]
}

```
