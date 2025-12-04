# Operation type - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operation type**

## CodeSystem: Operation type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/OperationType | *Version*:2.16.0 |
| Active as of 2022-07-04 | *Computable Name*:OperationType |

 
Operation type (primary, revision, extirpation) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OperationerAktuelDKRR](ValueSet-OperationerAktuelDKRR.md)
* [OperationstypeFoersteRecidiv](ValueSet-OperationstypeFoersteRecidiv.md)
* [OperationstypeLYFO](ValueSet-OperationstypeLYFO.md)
* [OperationstypePrimaerRevision](ValueSet-OperationstypePrimaerRevision.md)
* [OperationstypePrimaerSekundaer](ValueSet-OperationstypePrimaerSekundaer.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "OperationType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationType",
  "version" : "2.16.0",
  "name" : "OperationType",
  "title" : "Operation type",
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
  "description" : "Operation type (primary, revision, extirpation)",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "extirpation",
      "display" : "Extirpation",
      "definition" : "Extirpation / Ekstirpation / SNOMED-CT: 360020006"
    },
    {
      "code" : "primary",
      "display" : "Primary",
      "definition" : "Primary"
    },
    {
      "code" : "secondary",
      "display" : "Secondary",
      "definition" : "Secondary"
    },
    {
      "code" : "revision",
      "display" : "Revision",
      "definition" : "Revision"
    },
    {
      "code" : "first_time",
      "display" : "First time",
      "definition" : "First time / Første gang"
    },
    {
      "code" : "recurrent",
      "display" : "Recurrent",
      "definition" : "Recurrent / Recidiv"
    }
  ]
}

```
