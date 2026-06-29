# Operation canal - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operation canal**

## CodeSystem: Operation canal 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/OperationCanal | *Version*:2.23.1 |
| Active as of 2022-09-15 | *Computable Name*:OperationCanal |

 
Operation canal 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OperationKanalAntalDKRR](ValueSet-OperationKanalAntalDKRR.md)
* [OperationKanalFemurPlaceringDKRR](ValueSet-OperationKanalFemurPlaceringDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "OperationCanal",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationCanal",
  "version" : "2.23.1",
  "name" : "OperationCanal",
  "title" : "Operation canal",
  "status" : "active",
  "date" : "2022-09-15T00:00:00+02:00",
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
  "description" : "Operation canal",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
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
    "code" : "1_canal",
    "display" : "1 canal",
    "definition" : "1 canal / 1 kanal"
  },
  {
    "code" : "2_canals",
    "display" : "2 canals",
    "definition" : "2 canals / 2 kanaler"
  },
  {
    "code" : "transtibial",
    "display" : "Transtibial",
    "definition" : "Transtibial"
  },
  {
    "code" : "anatomical",
    "display" : "Anatomical",
    "definition" : "Anatomical / Anatomisk"
  }]
}

```
