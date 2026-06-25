# Dele følelser - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dele følelser**

## ValueSet: Dele følelser 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DeleFoelelser | *Version*:2.23.0 |
| Active as of 2026-06-24 | *Computable Name*:DeleFoelelser |

 
Dele følelser 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "DeleFoelelser",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DeleFoelelser",
  "version" : "2.23.0",
  "name" : "DeleFoelelser",
  "title" : "Dele følelser",
  "status" : "active",
  "date" : "2026-06-24T00:00:00+02:00",
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
  "description" : "Dele følelser",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Frekvens",
      "concept" : [{
        "code" : "heleTiden"
      },
      {
        "code" : "forDetMeste"
      },
      {
        "code" : "nogleGange"
      },
      {
        "code" : "sjaeldent"
      },
      {
        "code" : "aldrig",
        "display" : "Slet ikke"
      }]
    }]
  }
}

```
