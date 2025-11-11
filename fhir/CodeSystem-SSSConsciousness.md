# Scandinavian Stroke Scale (SSS) - Consciousness - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Consciousness**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Consciousness 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSConsciousness | *Version*:2.13.0 |
| Active as of 2022-06-23 | *Computable Name*:SSSConsciousness |

 
Scandinavian Stroke Scale (SSS) - Consciousness: Svækket bevidsthed kan være udtryk for komplikationer som eksempelvis blødning eller ødem 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSBevidsthed](ValueSet-SSSBevidsthed.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSConsciousness",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSConsciousness",
  "version" : "2.13.0",
  "name" : "SSSConsciousness",
  "title" : "Scandinavian Stroke Scale (SSS) - Consciousness",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Consciousness: Svækket bevidsthed kan være udtryk for komplikationer som eksempelvis blødning eller ødem",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "6",
      "display" : "6",
      "definition" : "Vågen, er ved fuld bevidsthed"
    },
    {
      "code" : "4",
      "display" : "4",
      "definition" : "Somnolent: pt. kan vækkes til vågen tilstand, men pt. falder hen, når vedkommende overlades til sig selv."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Reagerer på verbal opfordring"
    },
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Dybt bevidstløs."
    }
  ]
}

```
