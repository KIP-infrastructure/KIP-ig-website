# Aktivitet: Sport (DKRR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aktivitet: Sport (DKRR)**

## ValueSet: Aktivitet: Sport (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AktivitetSportDKRR | *Version*:2.27.3 |
| Active as of 2022-09-19 | *Computable Name*:AktivitetSportDKRR |

 
Aktivitet: Sport (DKRR) 

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
  "id" : "AktivitetSportDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AktivitetSportDKRR",
  "version" : "2.27.3",
  "name" : "AktivitetSportDKRR",
  "title" : "Aktivitet: Sport (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Aktivitet: Sport (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ActivityType",
      "concept" : [{
        "code" : "football",
        "display" : "Fodbold"
      },
      {
        "code" : "handball",
        "display" : "Håndbold"
      },
      {
        "code" : "alpine",
        "display" : "Alpint"
      },
      {
        "code" : "snowboard",
        "display" : "Snowboard"
      },
      {
        "code" : "cross-country_skiing",
        "display" : "Langrend"
      },
      {
        "code" : "ice_hockey",
        "display" : "Ishockey"
      },
      {
        "code" : "badminton",
        "display" : "Badminton"
      },
      {
        "code" : "tennis_squash",
        "display" : "Tennis/Squash"
      },
      {
        "code" : "martial_arts",
        "display" : "Kampsport"
      },
      {
        "code" : "basketball",
        "display" : "Basketball"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden idræt"
      }]
    }]
  }
}

```
