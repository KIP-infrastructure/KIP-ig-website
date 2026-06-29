# Edema (brain) - Stroke - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Edema (brain) - Stroke**

## CodeSystem: Edema (brain) - Stroke 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EdemaStroke | *Version*:2.23.1 |
| Active as of 2022-09-01 | *Computable Name*:EdemaStroke |

 
Edema (brain) - Stroke 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HjerneoedemDAP](ValueSet-HjerneoedemDAP.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EdemaStroke",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EdemaStroke",
  "version" : "2.23.1",
  "name" : "EdemaStroke",
  "title" : "Edema (brain) - Stroke",
  "status" : "active",
  "date" : "2022-09-01T00:00:00+02:00",
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
  "description" : "Edema (brain) - Stroke",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
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
    "code" : "coed_1",
    "display" : "COED 1",
    "definition" : "COED 1"
  },
  {
    "code" : "coed_2",
    "display" : "COED 2",
    "definition" : "COED 2"
  },
  {
    "code" : "coed_3",
    "display" : "COED 3",
    "definition" : "COED 3"
  }]
}

```
