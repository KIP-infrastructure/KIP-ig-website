# KvalmeSmerte - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **KvalmeSmerte**

## ValueSet: KvalmeSmerte 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SmerteKvalme | *Version*:2.27.0 |
| Active as of 2022-05-31 | *Computable Name*:SmerteKvalme |

 
Vurdering af patientens smerte- / kvalmetilstand 

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
  "id" : "SmerteKvalme",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SmerteKvalme",
  "version" : "2.27.0",
  "name" : "SmerteKvalme",
  "title" : "KvalmeSmerte",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Vurdering af patientens smerte- / kvalmetilstand",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SmerteKvalme",
      "concept" : [{
        "code" : "0",
        "display" : "0"
      },
      {
        "code" : "1",
        "display" : "1"
      },
      {
        "code" : "2",
        "display" : "2"
      },
      {
        "code" : "3",
        "display" : "3"
      }]
    }]
  }
}

```
