# Cognitive function finding - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cognitive function finding**

## CodeSystem: Cognitive function finding 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CognitiveFunctionFinding | *Version*:2.17.1 |
| Active as of 2022-07-19 | *Computable Name*:CognitiveFunctionFinding |

 
Cognitive function finding / SNOMED-CT: 373930000 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KognitivPaavirkningDANDEM](ValueSet-KognitivPaavirkningDANDEM.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CognitiveFunctionFinding",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CognitiveFunctionFinding",
  "version" : "2.17.1",
  "name" : "CognitiveFunctionFinding",
  "title" : "Cognitive function finding",
  "status" : "active",
  "date" : "2022-07-19T00:00:00+02:00",
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
  "description" : "Cognitive function finding / SNOMED-CT: 373930000",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "property" : [
    {
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
    }
  ],
  "concept" : [
    {
      "code" : "normal",
      "display" : "Normal cognition",
      "definition" : "Normal cognition / Normal kognitiv funktion / SNOMED-CT: 449888003"
    },
    {
      "code" : "impaired",
      "display" : "Impaired cognition",
      "definition" : "Impaired cognition / Svækket erkendelsesevne / SNOMED-CT: 386806002"
    },
    {
      "code" : "dementia",
      "display" : "Dementia",
      "definition" : "Dementia / Demens / SNOMED-CT: 52448006",
      "concept" : [
        {
          "code" : "mild",
          "display" : "Mild",
          "definition" : "Mild / Let / SNOMED-CT: 255604002"
        },
        {
          "code" : "moderate",
          "display" : "Moderate",
          "definition" : "Moderate / Moderat / SNOMED-CT: 6736007"
        },
        {
          "code" : "severe",
          "display" : "Severe",
          "definition" : "Severe / Svær / SNOMED-CT: 24484000"
        }
      ]
    }
  ]
}

```
