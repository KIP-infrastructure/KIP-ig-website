# Foerste kontakt sted - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Foerste kontakt sted**

## ValueSet: Foerste kontakt sted 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KontaktSted | *Version*:2.27.1 |
| Active as of 2022-09-06 | *Computable Name*:KontaktSted |

 
Sted for første kontakt 

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
  "id" : "KontaktSted",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KontaktSted",
  "version" : "2.27.1",
  "name" : "KontaktSted",
  "title" : "Foerste kontakt sted",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "Sted for første kontakt",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ContactPlace",
      "concept" : [{
        "code" : "outpatient_clinic",
        "display" : "Fremmøde i ambulatorium"
      },
      {
        "code" : "home_visit",
        "display" : "Hjemmebesøg"
      },
      {
        "code" : "oversight",
        "display" : "Tilsyn anden afdeling uden samtidig tilknytning af patienten til det palliative team"
      },
      {
        "code" : "oversight_palliative",
        "display" : "Tilsyn anden afdeling med samtidig tilknytning af patienten til det palliative team"
      }]
    }]
  }
}

```
