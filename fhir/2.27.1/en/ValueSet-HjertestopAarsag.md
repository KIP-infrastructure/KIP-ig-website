# Hjertestop Årsag - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hjertestop Årsag**

## ValueSet: Hjertestop Årsag 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HjertestopAarsag | *Version*:2.27.1 |
| Active as of 2022-06-29 | *Computable Name*:HjertestopAarsag |

 
Årsag til hjertestop 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "HjertestopAarsag",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HjertestopAarsag",
  "version" : "2.27.1",
  "name" : "HjertestopAarsag",
  "title" : "Hjertestop Årsag",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Årsag til hjertestop",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HjertestopAarsag",
      "concept" : [{
        "code" : "non_kardial",
        "display" : "Non-kardial"
      },
      {
        "code" : "formodet_kardial",
        "display" : "Formodet kardial"
      }]
    }]
  }
}

```
