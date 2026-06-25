# Function group (alloplasty) - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Function group (alloplasty)**

## CodeSystem: Function group (alloplasty) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/FunctionGroupAlloplasty | *Version*:2.23.0 |
| Active as of 2022-07-04 | *Computable Name*:FunctionGroupAlloplasty |

 
Function group (alloplasty) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FunktionsgruppeDHR](ValueSet-FunktionsgruppeDHR.md)
* [FunktionsgruppeDKR](ValueSet-FunktionsgruppeDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "FunctionGroupAlloplasty",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/FunctionGroupAlloplasty",
  "version" : "2.23.0",
  "name" : "FunctionGroupAlloplasty",
  "title" : "Function group (alloplasty)",
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
  "description" : "Function group (alloplasty)",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 5,
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
    "code" : "one_hip",
    "display" : "One hip affected",
    "definition" : "One hip affected"
  },
  {
    "code" : "both_hips",
    "display" : "Both hips affected",
    "definition" : "Both hips affected"
  },
  {
    "code" : "knee_affected",
    "display" : "Actual knee joint affected",
    "definition" : "Actual knee joint affected / Kun aktuelle knæled afficeret"
  },
  {
    "code" : "opposite_knee_affected",
    "display" : "Function inhibited in opposite knee",
    "definition" : "Function inhibited in opposite knee / Funktionshæmmende lidelse i modsatte knæ"
  },
  {
    "code" : "functional_knee_prosthesis",
    "display" : "Functioning prosthesis (opposite knee)",
    "definition" : "Functioning prosthesis (opposite knee) / Velfungerende protese i modsatte knæ"
  }]
}

```
