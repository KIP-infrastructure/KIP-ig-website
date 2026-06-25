# Alchohol or drugs - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alchohol or drugs**

## CodeSystem: Alchohol or drugs 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AlchoholDrugs | *Version*:2.23.0 |
| Active as of 2022-09-30 | *Computable Name*:AlchoholDrugs |

 
Alchohol or drugs 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PaavirkningPaagaaendeRETSPSYK](ValueSet-PaavirkningPaagaaendeRETSPSYK.md)
* [PaavirkningRETSPSYK](ValueSet-PaavirkningRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AlchoholDrugs",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AlchoholDrugs",
  "version" : "2.23.0",
  "name" : "AlchoholDrugs",
  "title" : "Alchohol or drugs",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Alchohol or drugs",
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
    "code" : "alchohol",
    "display" : "Alchohol",
    "definition" : "Alchohol / Alkohol"
  },
  {
    "code" : "cannabis",
    "display" : "Cannabis",
    "definition" : "Cannabis"
  },
  {
    "code" : "central_stimulants",
    "display" : "Central stimulants",
    "definition" : "Central stimulants / Centralstimulerende stoffer"
  },
  {
    "code" : "opioids",
    "display" : "Opiods",
    "definition" : "Opioids / Opioider"
  },
  {
    "code" : "benzodiazepines",
    "display" : "Benzodiazepines",
    "definition" : "Benzodiazepines / Benzodiazepiner"
  },
  {
    "code" : "steroids",
    "display" : "Steroids",
    "definition" : "Steroids / Steroider"
  }]
}

```
