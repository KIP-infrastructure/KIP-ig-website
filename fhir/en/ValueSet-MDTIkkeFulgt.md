# MDT-beslutning ikke fulgt; årsag - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MDT-beslutning ikke fulgt; årsag**

## ValueSet: MDT-beslutning ikke fulgt; årsag 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MDTIkkeFulgt | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:MDTIkkeFulgt |

 
Årsagen til hvorfor MDT-beslutning ikke er fuldt 

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
  "id" : "MDTIkkeFulgt",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MDTIkkeFulgt",
  "version" : "2.27.0",
  "name" : "MDTIkkeFulgt",
  "title" : "MDT-beslutning ikke fulgt; årsag",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Årsagen til hvorfor MDT-beslutning ikke er fuldt",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MDTNotFollowed",
      "concept" : [{
        "code" : "wishfornotreatment",
        "display" : "Patienten ønsker ikke behandlingen"
      },
      {
        "code" : "nonoperable",
        "display" : "Patienten er blevet non-operabel"
      },
      {
        "code" : "nonresectable",
        "display" : "Patienten er blevet non-resektabel"
      },
      {
        "code" : "death",
        "display" : "Patienten er død"
      }]
    }]
  }
}

```
