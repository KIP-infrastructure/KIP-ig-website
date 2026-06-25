# Lesion type - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lesion type**

## CodeSystem: Lesion type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/LesionType | *Version*:2.23.0 |
| Active as of 2022-09-19 | *Computable Name*:LesionType |

 
Lesion type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MenisklaesionTypeDKRR](ValueSet-MenisklaesionTypeDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "LesionType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/LesionType",
  "version" : "2.23.0",
  "name" : "LesionType",
  "title" : "Lesion type",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Lesion type",
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
    "code" : "meniscal",
    "display" : "Meniscal lesion",
    "definition" : "Meniscal lesion / Menisklæsion"
  },
  {
    "code" : "root",
    "display" : "Root lesion",
    "definition" : "Root lesion / Rodlæsion"
  },
  {
    "code" : "ramp",
    "display" : "RAMP lesion",
    "definition" : "RAMP lesion / RAMP læsion"
  }]
}

```
