# Pupilforhold - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pupilforhold**

## ValueSet: Pupilforhold 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Pupilforhold | *Version*:2.27.3 |
| Active as of 2022-06-28 | *Computable Name*:Pupilforhold |

 
Forholdet mellem pupillerne 

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
  "id" : "Pupilforhold",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Pupilforhold",
  "version" : "2.27.3",
  "name" : "Pupilforhold",
  "title" : "Pupilforhold",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Forholdet mellem pupillerne",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PupilCondition",
      "concept" : [{
        "code" : "normal",
        "display" : "Normale"
      },
      {
        "code" : "difference",
        "display" : "Pupildifference/lysstive pupiller"
      }]
    }]
  }
}

```
