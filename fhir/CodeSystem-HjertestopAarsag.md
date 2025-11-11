# Hjertestop Årsag - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hjertestop Årsag**

## CodeSystem: Hjertestop Årsag 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HjertestopAarsag | *Version*:2.13.0 |
| Active as of 2022-06-29 | *Computable Name*:HjertestopAarsag |

 
Årsag til hjertestop 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HjertestopAarsag](ValueSet-HjertestopAarsag.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HjertestopAarsag",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HjertestopAarsag",
  "version" : "2.13.0",
  "name" : "HjertestopAarsag",
  "title" : "Hjertestop Årsag",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Årsag til hjertestop",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "non_kardial",
      "display" : "Non-kardial",
      "definition" : "Non-kardial"
    },
    {
      "code" : "formodet_kardial",
      "display" : "Formodet kardial",
      "definition" : "Formodet kardial"
    }
  ]
}

```
