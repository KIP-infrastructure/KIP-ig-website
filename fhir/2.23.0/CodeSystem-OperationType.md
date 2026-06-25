# Operation type - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operation type**

## CodeSystem: Operation type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/OperationType | *Version*:2.23.0 |
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
  "version" : "2.23.0",
  "name" : "OperationType",
  "title" : "Operation type",
  "status" : "active",
  "date" : "2022-07-04T00:00:00+02:00",
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
  "description" : "Operation type (primary, revision, extirpation)",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
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
  }]
}

```
