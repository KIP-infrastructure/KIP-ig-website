# Stråleterapi (LYFO) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Stråleterapi (LYFO)**

## ValueSet: Stråleterapi (LYFO) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/StraaleterapiLYFO | *Version*:2.27.2 |
| Active as of 2022-07-18 | *Computable Name*:StraaleterapiLYFO |

 
Stråleterapi LYFO (LYFO) 

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
  "id" : "StraaleterapiLYFO",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/StraaleterapiLYFO",
  "version" : "2.27.2",
  "name" : "StraaleterapiLYFO",
  "title" : "Stråleterapi (LYFO)",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Stråleterapi LYFO (LYFO)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen stråleterapi"
      },
      {
        "code" : "other",
        "display" : "Andet / Uspecificeret"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RadiationTherapyType",
      "concept" : [{
        "code" : "involved_node",
        "display" : "Involved node"
      },
      {
        "code" : "involved_field",
        "display" : "Involved field"
      },
      {
        "code" : "extended_field",
        "display" : "Extended field"
      },
      {
        "code" : "total_body_irradiation",
        "display" : "Total body irradiation"
      },
      {
        "code" : "coat_field",
        "display" : "Kappefelt"
      },
      {
        "code" : "tbi_involed_field",
        "display" : "TBI + Involved field"
      }]
    }]
  }
}

```
