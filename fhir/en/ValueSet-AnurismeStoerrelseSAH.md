# Anurisme stoerrelse [SAH] - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anurisme stoerrelse [SAH]**

## ValueSet: Anurisme stoerrelse [SAH] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnurismeStoerrelseSAH | *Version*:2.27.1 |
| Active as of 2022-06-28 | *Computable Name*:AnurismeStoerrelseSAH |

 
Anurisme stoerrelse [SAH] 

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
  "id" : "AnurismeStoerrelseSAH",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnurismeStoerrelseSAH",
  "version" : "2.27.1",
  "name" : "AnurismeStoerrelseSAH",
  "title" : "Anurisme stoerrelse [SAH]",
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
  "description" : "Anurisme stoerrelse [SAH]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AneurysmSizeScale",
      "concept" : [{
        "code" : "gt25",
        "display" : ">25 mm"
      },
      {
        "code" : "ge12le25",
        "display" : "12 mm - 25 mm"
      },
      {
        "code" : "ge7lt12",
        "display" : "7 mm - 12 mm"
      },
      {
        "code" : "lt7",
        "display" : "<7 mm"
      }]
    }]
  }
}

```
