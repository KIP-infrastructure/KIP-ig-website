# Treatment lesion - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment lesion**

## CodeSystem: Treatment lesion 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentLesion | *Version*:2.17.1 |
| Active as of 2022-09-19 | *Computable Name*:TreatmentLesion |

 
Treatment lesion 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BrusklaesionBehandlingDKRR](ValueSet-BrusklaesionBehandlingDKRR.md)
* [MenisklaesionBehandlingDKRR](ValueSet-MenisklaesionBehandlingDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentLesion",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentLesion",
  "version" : "2.17.1",
  "name" : "TreatmentLesion",
  "title" : "Treatment lesion",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Treatment lesion",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "resection",
      "display" : "Resection",
      "definition" : "Resection / Resektion"
    },
    {
      "code" : "suture",
      "display" : "Suture",
      "definition" : "Suture / Sutur"
    },
    {
      "code" : "all_inside",
      "display" : "All inside",
      "definition" : "All inside"
    },
    {
      "code" : "debridement",
      "display" : "Debridement",
      "definition" : "Debridement"
    },
    {
      "code" : "microfracture",
      "display" : "Microfracture",
      "definition" : "Microfracture / Mikrofraktur"
    },
    {
      "code" : "mosaic_plastic",
      "display" : "Mosaic plastic",
      "definition" : "Mosaic plastic / Mosaikplastik"
    },
    {
      "code" : "synthetic_scaffold",
      "display" : "Synthetic scaffold",
      "definition" : "Synthetic scaffold / Syntetisk scaffold"
    },
    {
      "code" : "cell_transplantation",
      "display" : "Cell transplantation",
      "definition" : "Cell transplantation / Celletransplantation"
    }
  ]
}

```
