# Killip sværhedsgrad - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Killip sværhedsgrad**

## ValueSet: Killip sværhedsgrad 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HeartFailure | *Version*:2.27.1 |
| Active as of 2022-06-07 | *Computable Name*:HeartFailure |

 
Killip sværhedsgrad af hjertestop 

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
  "id" : "HeartFailure",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HeartFailure",
  "version" : "2.27.1",
  "name" : "HeartFailure",
  "title" : "Killip sværhedsgrad",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Killip sværhedsgrad af hjertestop",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "heart_failur_class_2",
        "display" : "Killip klasse 2 (Væskeraslen ved respiration/halsvenestase)"
      },
      {
        "code" : "heart_failur_class_3",
        "display" : "Killip klasse 3 (Lungeødem)"
      },
      {
        "code" : "heart_failur_class_4",
        "display" : "Killip klasse 4 (Kardiogent shock)"
      }]
    }]
  }
}

```
