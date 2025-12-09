# Prioritering - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Prioritering**

## CodeSystem: Prioritering 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Priority | *Version*:2.17.1 |
| Active as of 2022-05-31 | *Computable Name*:Priority |

 
Patientens prioriteringsbehov 

 This Code system is referenced in the content logical definition of the following value sets: 

* [GradAkutDHDB](ValueSet-GradAkutDHDB.md)
* [IndgrebPrioritetAkutElektiv](ValueSet-IndgrebPrioritetAkutElektiv.md)
* [Priority](ValueSet-Priority.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Priority",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Priority",
  "version" : "2.17.1",
  "name" : "Priority",
  "title" : "Prioritering",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Patientens prioriteringsbehov",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "emergency",
      "display" : "Emergency",
      "definition" : "Emergency / Akut / SNOMED-CT: 25876001"
    },
    {
      "code" : "elective",
      "display" : "Elective",
      "definition" : "Elective / Elektiv / SNOMED-CT: 103390000"
    },
    {
      "code" : "hasten",
      "display" : "Hastened",
      "definition" : "Fremskyndet (dage)"
    },
    {
      "code" : "urgent",
      "display" : "Urgent",
      "definition" : "Hastende (timer) / SNOMED-CT: 103391001"
    },
    {
      "code" : "lethal",
      "display" : "Life-threatening",
      "definition" : "Umiddelbart livstruende"
    },
    {
      "code" : "24hrs",
      "display" : "Within 24 hours",
      "definition" : "Indenfor 24 timer"
    },
    {
      "code" : "72hrs",
      "display" : "Within 72 hours",
      "definition" : "Indenfor 72 timer"
    },
    {
      "code" : "14days",
      "display" : "Within 14 days",
      "definition" : "Indenfor 14 dage"
    }
  ]
}

```
