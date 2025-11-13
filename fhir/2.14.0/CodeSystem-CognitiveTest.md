# Cognitive test - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cognitive test**

## CodeSystem: Cognitive test 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CognitiveTest | *Version*:2.14.0 |
| Active as of 2025-05-09 | *Computable Name*:CognitiveTest |

 
Cognitive test 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KognitivTestDANDEM](ValueSet-KognitivTestDANDEM.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CognitiveTest",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CognitiveTest",
  "version" : "2.14.0",
  "name" : "CognitiveTest",
  "title" : "Cognitive test",
  "status" : "active",
  "date" : "2025-05-09T00:00:00+02:00",
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
  "description" : "Cognitive test",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 8,
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
      "code" : "mmse",
      "display" : "MMSE",
      "definition" : "MMSE"
    },
    {
      "code" : "ace",
      "display" : "ACE",
      "definition" : "ACE"
    },
    {
      "code" : "basic",
      "display" : "BASIC",
      "definition" : "BASIC"
    },
    {
      "code" : "camcog",
      "display" : "CAMcog",
      "definition" : "CAMcog"
    },
    {
      "code" : "moca",
      "display" : "MoCa",
      "definition" : "MoCa"
    },
    {
      "code" : "rudas",
      "display" : "RUDAS",
      "definition" : "RUDAS"
    },
    {
      "code" : "trinvold/dsqiid",
      "display" : "Trinvold/DSQIID",
      "definition" : "Trinvold/DSQIID"
    },
    {
      "code" : "MCE",
      "display" : "MCE",
      "definition" : "MCE",
      "property" : [
        {
          "code" : "comment",
          "valueString" : "Unit added"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2025-05-01T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "inactive",
          "valueBoolean" : false
        }
      ]
    }
  ]
}

```
