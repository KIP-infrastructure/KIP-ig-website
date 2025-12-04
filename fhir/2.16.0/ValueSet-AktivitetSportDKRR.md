# Aktivitet: Sport (DKRR) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aktivitet: Sport (DKRR)**

## ValueSet: Aktivitet: Sport (DKRR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AktivitetSportDKRR | *Version*:2.16.0 |
| Active as of 2022-09-19 | *Computable Name*:AktivitetSportDKRR |

 
Aktivitet: Sport (DKRR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 11 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "AktivitetSportDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AktivitetSportDKRR",
  "version" : "2.16.0",
  "name" : "AktivitetSportDKRR",
  "title" : "Aktivitet: Sport (DKRR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Aktivitet: Sport (DKRR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ActivityType",
        "concept" : [
          {
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
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden idræt"
          }
        ]
      }
    ]
  }
}

```
