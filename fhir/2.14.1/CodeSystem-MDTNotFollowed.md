# Reasons for MDT-decision not followed - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reasons for MDT-decision not followed**

## CodeSystem: Reasons for MDT-decision not followed 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MDTNotFollowed | *Version*:2.14.1 |
| Active as of 2022-06-03 | *Computable Name*:MDTNotFollowed |

 
Årsagen til hvorfor MDT-beslutning (Multidisciplinære Teamkonferencer) ikke er fuldt 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MDTIkkeFulgt](ValueSet-MDTIkkeFulgt.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MDTNotFollowed",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MDTNotFollowed",
  "version" : "2.14.1",
  "name" : "MDTNotFollowed",
  "title" : "Reasons for MDT-decision not followed",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
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
  "description" : "Årsagen til hvorfor MDT-beslutning (Multidisciplinære Teamkonferencer) ikke er fuldt",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "wishfornotreatment",
      "display" : "Ønsker ikke behandlingen",
      "definition" : "Patienten ønsker ikke behandlingen"
    },
    {
      "code" : "nonoperable",
      "display" : "Non-operabel",
      "definition" : "Patienten er blevet non-operabel"
    },
    {
      "code" : "nonresectable",
      "display" : "Non-resektabel",
      "definition" : "Patienten er blevet non-resektabel"
    },
    {
      "code" : "death",
      "display" : "Død",
      "definition" : "Patienten er død"
    }
  ]
}

```
