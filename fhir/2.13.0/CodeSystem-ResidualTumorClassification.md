# Residual tumor (R) classification - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Residual tumor (R) classification**

## CodeSystem: Residual tumor (R) classification 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ResidualTumorClassification | *Version*:2.13.0 |
| Active as of 2022-06-07 | *Computable Name*:ResidualTumorClassification |

 
Residual tumor (R) classification. Link: https://acsjournals.onlinelibrary.wiley.com/doi/10.1002/cncr.10492 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RKlassifikation](ValueSet-RKlassifikation.md)
* [RKlassifikationTilDegc](ValueSet-RKlassifikationTilDegc.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ResidualTumorClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ResidualTumorClassification",
  "version" : "2.13.0",
  "name" : "ResidualTumorClassification",
  "title" : "Residual tumor (R) classification",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Residual tumor (R) classification. Link: https://acsjournals.onlinelibrary.wiley.com/doi/10.1002/cncr.10492",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "rx",
      "display" : "RX",
      "definition" : "RX The presence of residual tumor cannot be assessed."
    },
    {
      "code" : "r0",
      "display" : "R0",
      "definition" : "R0 No residual tumor."
    },
    {
      "code" : "r1",
      "display" : "R1",
      "definition" : "R1 Microscopic residual tumor."
    },
    {
      "code" : "r01",
      "display" : "R0/R1",
      "definition" : "No visible presence of residual tumor"
    },
    {
      "code" : "r2",
      "display" : "R2",
      "definition" : "R2 Macroscopic residual tumor."
    }
  ]
}

```
