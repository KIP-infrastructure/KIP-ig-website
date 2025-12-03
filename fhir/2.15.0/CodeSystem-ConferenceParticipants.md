# Conference Participants - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Conference Participants**

## CodeSystem: Conference Participants 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ConferenceParticipants | *Version*:2.15.0 |
| Active as of 2025-04-07 | *Computable Name*:ConferenceParticipants |

 
Deltagende faggrupper 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KonferenceDPD](ValueSet-KonferenceDPD.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ConferenceParticipants",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ConferenceParticipants",
  "version" : "2.15.0",
  "name" : "ConferenceParticipants",
  "title" : "Conference Participants",
  "status" : "active",
  "date" : "2025-04-07T00:00:00+02:00",
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
  "description" : "Deltagende faggrupper",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "4+",
      "display" : "minimum 4 professions",
      "definition" : "minimum 4 specificerede faggrupper"
    },
    {
      "code" : "2-3",
      "display" : "2 - 3 professions",
      "definition" : "2 - 3 specificerede faggrupper"
    }
  ]
}

```
