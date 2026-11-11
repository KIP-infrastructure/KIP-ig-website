# NIHSS - 8. Sensibilitet - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 8. Sensibilitet**

## ValueSet: NIHSS - 8. Sensibilitet 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS8Sensibilitet | *Version*:2.27.3 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS8Sensibilitet |

 
The National Institute of Health Stroke Scale (NIHSS) - 8. Sensibilitet (brug pinprick til at teste arme, ben, trunkus og ansigt - sammenlign side for side) 

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
  "id" : "NIHSS8Sensibilitet",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS8Sensibilitet",
  "version" : "2.27.3",
  "name" : "NIHSS8Sensibilitet",
  "title" : "NIHSS - 8. Sensibilitet",
  "status" : "active",
  "date" : "2022-06-27T00:00:00+02:00",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 8. Sensibilitet (brug pinprick til at teste arme, ben, trunkus og ansigt - sammenlign side for side)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS8Sensory",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Normal sensibilitet for stik"
      },
      {
        "code" : "1",
        "display" : "1 = Let til moderat nedsat sensibilitet for prik"
      },
      {
        "code" : "2",
        "display" : "2 = Svær til total sensibilitetstab"
      }]
    }]
  }
}

```
