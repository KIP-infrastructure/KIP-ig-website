# Assessment type - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Assessment type**

## CodeSystem: Assessment type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AssessmentType | *Version*:2.13.0 |
| Active as of 2025-05-09 | *Computable Name*:AssessmentType |

 
Assessment type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [UdredningDANDEM](ValueSet-UdredningDANDEM.md)
* [UdredningDANDEM2025](ValueSet-UdredningDANDEM2025.md)
* [UdredningKliniskGenetisk](ValueSet-UdredningKliniskGenetisk.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AssessmentType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AssessmentType",
  "version" : "2.13.0",
  "name" : "AssessmentType",
  "title" : "Assessment type",
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
  "description" : "Assessment type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "clinical",
      "display" : "Clinical",
      "definition" : "Clinical / Klinisk / SNOMED-CT: 58147004"
    },
    {
      "code" : "genetic_counseling",
      "display" : "Genetic counseling",
      "definition" : "Genetic counseling / Genetisk rådgivning / SNOMED-CT: 79841006"
    },
    {
      "code" : "primary_dementia_assessment",
      "display" : "Primary dementia assessment",
      "definition" : "Primary dementia assessment / Primær demensudredning"
    },
    {
      "code" : "second_opinion",
      "display" : "Second opinion",
      "definition" : "Second opinion"
    },
    {
      "code" : "referred_again_behavioral_problems",
      "display" : "Referred again beacause of behavioral problems",
      "definition" : "Referred again beacause of behavioral problems / Genhenvist pga. adfærdsforstyrrelser"
    },
    {
      "code" : "referred_again_dementia_treatment",
      "display" : "Referred again beacause of dementia treatment",
      "definition" : "Referred again beacause of dementia treatment / Genhenvist pga. demensbehandling"
    },
    {
      "code" : "revisited_primary_assessment",
      "display" : "Revisited for primary assessment",
      "definition" : "Revisited for primary assessment / Omvisiteret til primær udredning"
    },
    {
      "code" : "no_wish_for_assessment",
      "display" : "Patient interrupts investigation before diagnostic interview",
      "definition" : "Patient interrupts investigation before diagnostic interview / Patient afbryder udredning før diagnosesamtale"
    }
  ]
}

```
